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
        $account = Account::where('user_id', auth()->id())->get();

        return view('accounts.accounts', compact('account'));
    }
}
