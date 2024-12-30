<?php

namespace App\Http\Controllers;

use App\Models\BuzzerControl;
use App\Http\Requests\StoreBuzzerControlRequest;
use App\Http\Requests\UpdateBuzzerControlRequest;
use Illuminate\Support\Facades\Request;

class BuzzerControlController 
{
    public function update(UpdateBuzzerControlRequest $request)
    {
        // Update atau buat data buzzer
        $buzzer = BuzzerControl::first();
        if (!$buzzer) {
            $buzzer = BuzzerControl::create(['status' => $request->status]);
        } else {
            $buzzer->update(['status' => $request->status]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Buzzer status updated successfully',
            'data' => $buzzer,
        ]);
    }

    /**
     * Get the current buzzer status.
     */
    public function index()
    {
        $buzzer = BuzzerControl::first();

        if (!$buzzer) {
            return response()->json([
                'status' => 'success',
                'message' => 'No buzzer data found',
                'data' => ['status' => false], // Default ke false jika belum ada
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Buzzer status retrieved successfully',
            'data' => $buzzer,
        ]);
    }
}
