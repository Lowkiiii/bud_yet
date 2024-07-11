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
        $transactions = AccountTransaction::with('account')
            ->where('user_id', Auth::id())
            ->orderBy('date', 'desc')
            ->get();

        $accounts = Account::where('user_id', Auth::id())->get();

        return view('transaction.transaction', compact('transactions', 'accounts'));
    }
}
