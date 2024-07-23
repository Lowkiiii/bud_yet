<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::where('user_id', Auth::id())->latest()->get();
        $accounts = Account::where('user_id', Auth::id())->get();
        
        return view('schedule.schedule', compact('schedules', 'accounts'));
    }
    

    public function create()
    {
        return redirect()->route('schedule.index');
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'amount' => 'required|numeric',
                'target_amount' => 'required|numeric',
                'from_account_id' => 'required|exists:tbl_account,id',
                'to_account_id' => 'required|exists:tbl_account,id',
                'frequency' => 'required|in:daily,weekly,monthly,annually',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
            ]);

            $schedule = new Schedule($validatedData);
            $schedule->user_id = Auth::id();
            $schedule->status = 'active';
            $schedule->name = $validatedData['name'];
            $schedule->amount = $validatedData['amount'];
            $schedule->target_amount = $validatedData['target_amount'];
            $schedule->from_account_id = $validatedData['from_account_id'];
            $schedule->to_account_id = $validatedData['to_account_id'];
            $schedule->frequency = $validatedData['frequency'];
            $schedule->start_date = $validatedData['start_date'];
            $schedule->end_date = $validatedData['end_date'];
            $schedule->save();

            // Trigger the initial transaction
            // $this->processSchedule($schedule);

            return redirect()->route('schedule.schedule')->with('success', 'Schedule created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating schedule: ' . $e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while creating the schedule.']);
        }
    }

    // public function processSchedule(Schedule $schedule)
    // {
    //     // Check if the schedule is active and within the date range
    //     if ($schedule->status === 'active' && $schedule->start_date <= now() && $schedule->end_date >= now()) {
    //         $fromAccount = Account::findOrFail($schedule->from_account_id);
    //         $toAccount = Account::findOrFail($schedule->to_account_id);

    //         // Check if there's enough balance in the from account
    //         if ($fromAccount->balance >= $schedule->amount) {
    //             // Perform the transaction
    //             $fromAccount->balance -= $schedule->amount;
    //             $toAccount->balance += $schedule->amount;

    //             $fromAccount->save();
    //             $toAccount->save();

    //             // Log the transaction
    //             Log::info("Scheduled transaction processed: {$schedule->amount} transferred from account {$fromAccount->id} to account {$toAccount->id}");

    //             // Check if target amount is reached (if applicable)
    //             if ($toAccount->balance >= $schedule->target_amount) {
    //                 $schedule->status = 'completed';
    //                 $schedule->save();
    //             }
    //         } else {
    //             Log::warning("Insufficient funds for scheduled transaction: Schedule ID {$schedule->id}");
    //         }
    //     }
    // }

}
