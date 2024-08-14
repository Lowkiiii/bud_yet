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
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'income_name' => 'required|string',
                'amount' => 'required|numeric',
                'date' => 'required|date',
            ]);

            $income = Income::findOrFail($id);

            if ($income->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to update this skills.');
            }


            $income->income_name = $validatedData['income_name'];
            $income->amount = $validatedData['amount'];
            $income->date = $validatedData['date'];
            $income->user_id = Auth::id();
            $income->save();


            return redirect()->route('income')->with('flash_message', 'Income Updated!');
        } catch (\Exception $e) {
            Log::error('Error updating Income: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while updating the Income.']);
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
        $accounts = Income::where('user_id', $user->id)->get();

        return view('income.income', compact('userIncome', 'totalIncome', 'totalPastIncome', 'accounts'));
        //return view('dashboard.dashboard', compact('userIncome'));
    }

    public function destroy($id)
    {
        try {
            $userIncome = Income::findOrFail($id);

            if ($userIncome->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to delete this income.');
            }

            $userIncome->delete();

            return redirect()->route('income')->with('flash_message', 'Account successfully deleted.');
        } catch (\Exception $e) {
            Log::error('Error deleting Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while deleting the Account.']);
        }
    }

    // public function destroy($id)
    // {
    //     $income = Income::find($id);

    //     if ($income) {
    //         $income->delete();
    //         return redirect()->route('income.index')->with('success', 'Income deleted successfully.');
    //     }

    //     return redirect()->route('income.index')->with('error', 'Income not found.');
    // }


    public function dashboard()
    {
        // $userIncome = Auth::user()->userIncome;
        $userIncome = Income::where('user_id', auth()->id())->get();

        return view('dashboard.dashboard', compact('userIncome'));
        //return view('dashboard.dashboard', compact('userIncome'));
    }
}
