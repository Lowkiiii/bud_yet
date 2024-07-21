<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Date;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.dashboard', compact('user'));
    }

    public function accounts()
    {
        $user = Auth::user();
        return view('accounts.accounts', compact('user'));
    }

    public function schedule()
    {
        $user = Auth::user();
        return view('schedule.schedule', compact('user'));
    }
    public function income()
    {
        $user = Auth::user();
        return view('income.income', compact('user'));
    }
    public function transaction()
    {
        $user = Auth::user();
        return view('transaction.transaction', compact('user'));
    }
}
