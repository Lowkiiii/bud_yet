<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticationController extends Controller
{
    /**
     * Display the login view.
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(Request $request) : RedirectResponse
    {
        // $credentials = $request->validate([
            
        //     'username' => ['required', 'username'],
        //     'password' => ['required'],
        // ]);

        $credentials = $request->validate([
            'username' => ['required', 'string', 'exists:users,username'],
            'password' => ['required'],
        ]);

        try{
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if($user){
                return redirect()->intended('/dashboard');
            }
            
            
        }

     
        return redirect()->back()->with('success', 'Successfully registered');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while registering. Please try again.');
    }
    
        
    
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    

}
