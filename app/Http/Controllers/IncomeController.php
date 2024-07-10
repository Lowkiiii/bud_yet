<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Income;
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
    
            return redirect()->route('studentProf')->with('flash_message', 'Income Added!');
        } catch (\Exception $e) {
            Log::error('Error saving income: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while saving the income.']);
        }
    }

    public function index()
    {
        $userIncome = Auth::user()->userIncome;
        return view('income.income', compact('userIncome'));
    }
}
