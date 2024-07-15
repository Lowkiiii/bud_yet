<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\AccountTransaction;
use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ActTransactionController extends Controller
{
    //
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'amount' => 'required|numeric|min:0.01',
                'date' => 'required|date',
                'account_id' => 'required|exists:tbl_account,id',
                'type' => 'required|in:deposit,withdraw',
                'category' => 'required|string|max:255',
            ]);

            DB::beginTransaction();

            $account = Account::findOrFail($validatedData['account_id']);

            if ($validatedData['type'] == 'withdraw' && $account->balance < $validatedData['amount']) {
                throw new \Exception('Insufficient funds');
            }

            $accountTransac = new AccountTransaction();
            $accountTransac->amount = $validatedData['amount'];
            $accountTransac->date = $validatedData['date'];
            $accountTransac->user_id = Auth::id();
            $accountTransac->account_id = $validatedData['account_id'];
            $accountTransac->type = $validatedData['type'];
            $accountTransac->category = $validatedData['category'];
            $accountTransac->save();

            // Update account balance
            if ($validatedData['type'] == 'deposit') {
                $account->balance += $validatedData['amount'];
            } else {
                $account->balance -= $validatedData['amount'];
            }
            $account->save();

            DB::commit();

            return redirect()->route('transaction')->with('flash_message', 'Transaction Added!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error saving Transaction: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function getAccount()
    {
        $user = Auth::user();
        $accounts = Account::where('user_id', $user->id)->get();

        return view('transaction.transaction', compact('accounts'));
    }

    public function index()
    {
        $transactions = DB::table('tbl_account_transaction AS transaction')
            ->select('transaction.*', 'accounts.*')
            ->where('accounts.user_id', Auth::id())
            ->join('tbl_account AS accounts', 'transaction.account_id', '=', 'accounts.id')
            ->orderBy('transaction.created_at', 'desc') // Specify the table alias here
            ->get();
        $accounts = Account::where('user_id', Auth::id())->get();
        return view('transaction.transaction', compact('transactions', 'accounts'));
    }

    public function dashboard()
    {
        $currentYear = date('Y');

        $incomeData = AccountTransaction::where('type', 'deposit')
            ->whereYear('date', $currentYear)
            ->selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $expenseData = AccountTransaction::where('type', 'withdraw')
            ->whereYear('date', $currentYear)
            ->selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Fill in missing months with zero
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($incomeData[$i])) $incomeData[$i] = 0;
            if (!isset($expenseData[$i])) $expenseData[$i] = 0;
        }

        ksort($incomeData);
        ksort($expenseData);

        $transactions = DB::table('tbl_account_transaction AS transaction')
            ->select('transaction.*', 'accounts.*')
            ->where('accounts.user_id', Auth::id())
            ->join('tbl_account AS accounts', 'transaction.account_id', '=', 'accounts.id')
            ->orderBy('transaction.created_at', 'desc')
            ->get();

        // total deposit
        $totalDeposit = AccountTransaction::where('user_id', auth()->id())
            ->where('type', 'deposit')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');
        $totalPastDeposit = AccountTransaction::where('user_id', auth()->id())
            ->where('type', 'deposit')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('amount');


        // total expense
        $totalWithdraw = AccountTransaction::where('user_id', auth()->id())
            ->where('type', 'withdraw')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');
        $totalPastWithdraw = AccountTransaction::where('user_id', auth()->id())
            ->where('type', 'withdraw')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('amount');

        // data from account
        $account = Account::where('user_id', auth()->id())->get();
        //total amount

        $totalAmount = Account::where('user_id', auth()->id())
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('balance');

        $totalPastAmount = Account::where('user_id', auth()->id())
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('balance');

        // return view('dashboard.dashboard', compact('transactions', 'account', 'incomeData', 'expenseData'));
        return view('dashboard.dashboard', compact('transactions', 'account', 'incomeData', 'expenseData', 'totalAmount', 'totalPastAmount', 'totalWithdraw', 'totalPastWithdraw', 'totalDeposit', 'totalPastDeposit'));
    }
}
