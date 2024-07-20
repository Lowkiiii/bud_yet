<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class RegisterController extends Controller
{
    /**
     * Display the registration view.
     */
    public function index(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'],
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
        ], [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field must be a string.',
            'max' => 'The :attribute field must not exceed :max characters.',
            'unique' => 'The :attribute has already been taken.',
            'regex' => 'The :attribute field must only contain letters.',
        ]);

        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);

            return redirect()->route('/dashboard')->with('success', 'Successfully registered');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while registering. Please try again.');
        }
    }
}
