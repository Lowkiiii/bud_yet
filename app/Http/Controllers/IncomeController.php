<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Income;
use App\Models\Account;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class IncomeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'income_name' => 'required|string',
                'amount' => 'required|numeric',
                'date' => 'required|date',
            ]);

            $income = new Income();
            $income->income_name = $validatedData['income_name'];
            $income->amount = $validatedData['amount'];
            $income->date = $validatedData['date'];
            $income->user_id = Auth::id();

            $income->save();

            return redirect()->route('income')->with('flash_message', 'Income Added!');
        } catch (\Exception $e) {
            Log::error('Error saving income: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while saving the income.']);
        }
    }

    public function index()
    {
        // $userIncome = Auth::user()->userIncome;
        $userIncome = Income::where('user_id', auth()->id())->get();
        $totalIncome = Income::where('user_id', auth()->id())
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');
        $totalPastIncome = Income::where('user_id', auth()->id())
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('amount');

        $user = Auth::user();
        $accounts = Account::where('user_id', $user->id)->get();

        return view('income.income', compact('userIncome', 'totalIncome', 'totalPastIncome', 'accounts'));
        //return view('dashboard.dashboard', compact('userIncome'));
    }

    public function dashboard()
    {
        // $userIncome = Auth::user()->userIncome;
        $userIncome = Income::where('user_id', auth()->id())->get();

        return view('dashboard.dashboard', compact('userIncome'));
        //return view('dashboard.dashboard', compact('userIncome'));
    }
}
