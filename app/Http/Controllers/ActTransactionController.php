<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\AccountTransaction;
use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class ActTransactionController extends Controller
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'amount' => 'required|numeric',
                'date' => 'required|date',
                'account_id' => 'required|exists:tbl_account,id', // Add this line
            ]);

            $accountTransac = new AccountTransaction();
            $accountTransac->amount = $validatedData['amount'];
            $accountTransac->date = $validatedData['date'];
            $accountTransac->user_id = Auth::id();
            $accountTransac->account_id = $validatedData['account_id']; // Add this line

            $accountTransac->save();

            return redirect()->route('transaction')->with('flash_message', 'Transaction Added!');
        } catch (\Exception $e) {
            Log::error('Error saving Transaction: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while saving the Transaction.']);
        }
    }
    public function getAccount()
    {
        $user = Auth::user();
        $accounts = Account::where('user_id', $user->id)->get();
        
        return view('transaction.transaction', compact('accounts'));
    }
}
