<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PDFReportsController extends Controller
{
    public function createSickLeave() {
        return view('reports.create-sick-leave');
    }
    public function storeSickLeave(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_start' => 'required|date',
            'leave_end' => 'required|date',
            'issue_date' => 'required|date',
            'name' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality' => 'required|string',
            'employer' => 'required|string',
            'physician_name' => 'required|string',
            'position' => 'required|string',
            'medical_complex' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        function generateLeaveID() {
            $random = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6); // generates a random alphanumeric string with a length of 6
            $date = date('YmdHis'); // gets the current date and time in the format of YYYYMMDDHHIISS
            return 'S'.$date.$random; // concatenates the string 'L' with the date and the random string
        }

        $leave = new Leave();
        $leave->leave_start = $request->input('leave_start');
        $leave->leave_end = $request->input('leave_end');
        $leave->leave_id = generateLeaveID();
        $leave->save();

        return back()->with('success', __('groups.added-success'));
    }

    public function createSickLeaveFahd() {
        return view('reports.create-sick-leave-fahd');
    }
    public function storeSickLeaveFahd(Request $request) {
        return view('reports.create-sick-leave-fahd');
    }

    public function createReviewReport() {
        return view('reports.create-review-report');
    }
    public function storeReviewReport(Request $request) {
        return view('reports.create-review-report');
    }

    public function createReviewScene() {
        return view('reports.create-review-scene');
    }
    public function storeReviewScene(Request $request) {
        return view('reports.create-review-scene');
    }
}
