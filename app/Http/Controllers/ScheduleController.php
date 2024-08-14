<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Schedule::where('user_id', Auth::id())->latest()->get();
        $accounts = Account::where('user_id', Auth::id())->get();
        
        return view('schedule.schedule', compact('schedule', 'accounts'));
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

    public function update(Request $request, $id)
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

            $schedule = Schedule::findOrFail($id);

            if ($schedule->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to update this skills.');
            }


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

            return redirect()->route('schedule')->with('flash_message', 'Account Updated!');
        } catch (\Exception $e) {
            Log::error('Error updating Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while updating the Account.']);
        }
    }

    public function destroy($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);

            if ($schedule->user_id !== Auth::id()) {
                return redirect()->back()->with('error', 'You are not authorized to delete this schedule.');
            }

            $schedule->delete();

            return redirect()->route('schedules')->with('flash_message', 'Account successfully deleted.');
        } catch (\Exception $e) {
            Log::error('Error deleting Account: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'An error occurred while deleting the Account.']);
        }
    }

}
