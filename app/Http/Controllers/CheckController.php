<?php

namespace App\Http\Controllers;

use App\Models\SickLeave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckController extends Controller
{
    public function check()
    {
        return view('check.select');
    }

    public function checkSickLeave() {
        return view('check.sick-leave');
    }

    public function showSickLeave(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $report = SickLeave::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        return view('reports.sick-leave', [
            'report' => $report
        ]);
    }
}
