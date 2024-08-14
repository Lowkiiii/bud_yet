<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class AccountsController extends Controller
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'account_name' => 'required|string',
                'balance' => 'required|numeric',
                'min_balance' => 'required|numeric',
                'max_balance' => 'required|numeric',
            ]);

            $account = new Account();
            $account->account_name = $validatedData['account_name'];
            $account->balance = $validatedData['balance'];
            $account->min_balance = $validatedData['min_balance'];
            $account->max_balance = $validatedData['max_balance'];
            $account->user_id = Auth::id();

            $account->save();

            return redirect()->route('accounts')->with('flash_message', 'Account Added!');
        } catch (\Exception $e) {
            Log::error('Error saving Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while saving the Account.']);
        }
    }
    public function index()
    {
        $accounts = Auth::user()->accounts;
        return view('accounts.accounts', compact('accounts'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'account_name' => 'required|string',
                'balance' => 'required|numeric',
                'min_balance' => 'required|numeric',
                'max_balance' => 'required|numeric',
            ]);

            $account = Account::findOrFail($id);

            if ($account->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to update this skills.');
            }


            //$account = Account::findOrFail($id);
            $account->account_name = $validatedData['account_name'];
            $account->balance = $validatedData['balance'];
            $account->min_balance = $validatedData['min_balance'];
            $account->max_balance = $validatedData['max_balance'];

            $account->save();

            return redirect()->route('accounts')->with('flash_message', 'Account Updated!');
        } catch (\Exception $e) {
            Log::error('Error updating Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while updating the Account.']);
        }
    }

    public function destroy($id)
    {
        try {
            $account = Account::findOrFail($id);

            if ($account->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to delete this account.');
            }

            $account->delete();

            return redirect()->route('accounts')->with('flash_message', 'Account successfully deleted.');
        } catch (\Exception $e) {
            Log::error('Error deleting Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while deleting the Account.']);
        }
    }
}
