<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitBookingModel;

class HomeController extends Controller
{
    public function submitbooking(Request $request)
    {
        // Validate request
        $request->validate([
            'days' => 'nullable|array', 
            'days.*' => 'string',
            'time' => 'required|array|min:1', 
            'time.*' => 'string',
            'note' => 'nullable|string',
            'date' => 'required|date',
        ]);

        $date = $request->input('date');
        $note = $request->input('note');

        $days = $request->input('days');
        if (is_array($days)) {
            $days = array_map('trim', $days);
            $selectedDays = implode(', ', $days);
        } else {
            $days = [];
            $selectedDays = '';	
        }

        $time = $request->input('time');
        $selectedTime = implode(', ', $time);

        $data = new SubmitBookingModel();
        $data->booking_date = $date;
        $data->note = $note;
        $data->booking_days = $selectedDays;
        $data->booking_time = $selectedTime;
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data posted successfully!',
            'data' => $request->all(),
        ], 201);
    }
}
