<?php

namespace App\Http\Controllers;

use App\Models\ReviewReport;
use App\Models\ReviewScene;
use App\Models\SickLeave;
use App\Models\SickLeaveFahd;
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
            do {
                $random = rand(1000000, 9999999); // generates a random 7-digit number
                $id = 'PSL2303'.$random; // concatenates the string 'PSL2303' with the random number
            } while (SickLeave::where('leave_id', $id)->exists()); // loops until a unique leave_id is generated
            return $id; // returns the generated leave_id
        }

        $leave = new SickLeave();
        $leave->leave_id = generateLeaveID();
        $leave->leave_start = $request->leave_start;
        $leave->leave_end = $request->leave_end;
        $leave->issue_date = $request->issue_date;
        $leave->name = $request->name;
        $leave->national_id = $request->national_id;
        $leave->nationality = $request->nationality;
        $leave->employer = $request->employer;
        $leave->physician_name = $request->physician_name;
        $leave->position = $request->position;
        $leave->medical_complex = $request->medical_complex;
        $leave->save();

        return back()->with('success', __('sick-leave.created-success'));
    }

    public function createSickLeaveFahd() {
        return view('reports.create-sick-leave-fahd');
    }
    public function storeSickLeaveFahd(Request $request) {
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
            'diagnosis' => 'required|string',
            'medical_complex' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        function generateLeaveID() {
            do {
                $random = rand(1000000, 9999999); // generates a random 7-digit number
                $id = 'PSL8734'.$random; // concatenates the string 'PSL2303' with the random number
            } while (SickLeaveFahd::where('leave_id', $id)->exists()); // loops until a unique leave_id is generated
            return $id; // returns the generated leave_id
        }

        $leave = new SickLeaveFahd();
        $leave->leave_id = generateLeaveID();
        $leave->leave_start = $request->leave_start;
        $leave->leave_end = $request->leave_end;
        $leave->issue_date = $request->issue_date;
        $leave->name = $request->name;
        $leave->national_id = $request->national_id;
        $leave->nationality = $request->nationality;
        $leave->employer = $request->employer;
        $leave->physician_name = $request->physician_name;
        $leave->position = $request->position;
        $leave->diagnosis = $request->diagnosis;
        $leave->medical_complex = $request->medical_complex;
        $leave->save();

        return back()->with('success', __('sick-leave-fahd.created-success'));
    }

    public function createReviewReport() {
        return view('reports.create-review-report');
    }
    public function storeReviewReport(Request $request) {
        $validator = Validator::make($request->all(), [
            'national_id' => 'required|numeric',
            'national_type' => 'required|string',
            'name' => 'required|string',
            'print_date' => 'required|date',
            'nationality' => 'required|string',
            'birth_date' => 'required|date',
            'work' => 'required|string',
            'admission' => 'required|date',
            'discharge' => 'required|date',
            'details' => 'required|string',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:6144',
            'status' => 'required|in:0,1,2'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        function generateLeaveID() {
            do {
                $random = rand(1000000, 9999999); // generates a random 7-digit number
                $id = 'GSL2303'.$random; // concatenates the string 'PSL2303' with the random number
            } while (ReviewReport::where('leave_id', $id)->exists()); // loops until a unique leave_id is generated
            return $id; // returns the generated leave_id
        }

        $leave = new ReviewReport();
        $leave->leave_id = generateLeaveID();
        $leave->national_id = $request->national_id;
        $leave->national_type = $request->national_type;
        $leave->name = $request->name;
        $leave->print_date = $request->print_date;
        $leave->nationality = $request->nationality;
        $leave->birth_date = $request->birth_date;
        $leave->work = $request->work;
        $leave->admission = $request->admission;
        $leave->discharge = $request->discharge;
        $leave->details = $request->details;
        $leave->signature = $request->file('signature')->storeAs('public/signatures', uniqid() . '.' . $request->file('signature')->getClientOriginalExtension());
        $leave->status = $request->status;
        $leave->save();

        return back()->with('success', __('review-report.created-success'));
    }

    public function createReviewScene() {
        return view('reports.create-review-scene');
    }
    public function storeReviewScene(Request $request) {
        $validator = Validator::make($request->all(), [
            'admission' => 'required|date',
            'discharge' => 'required|date',
            'waiting_period' => 'required|numeric',
            'issue_date' => 'required|date',
            'name' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality' => 'required|string',
            'employer' => 'required|string',
            'physician_name' => 'required|string',
            'position' => 'required|string',
            'visit_type' => 'required|string',
            'medical_complex' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        function generateLeaveID() {
            do {
                $random = rand(1000000, 9999999); // generates a random 7-digit number
                $id = 'GSL8734'.$random; // concatenates the string 'PSL2303' with the random number
            } while (ReviewScene::where('leave_id', $id)->exists()); // loops until a unique leave_id is generated
            return $id; // returns the generated leave_id
        }

        $leave = new ReviewScene();
        $leave->leave_id = generateLeaveID();
        $leave->admission = $request->admission;
        $leave->discharge = $request->discharge;
        $leave->waiting_period = $request->waiting_period;
        $leave->issue_date = $request->issue_date;
        $leave->name = $request->name;
        $leave->national_id = $request->national_id;
        $leave->nationality = $request->nationality;
        $leave->employer = $request->employer;
        $leave->physician_name = $request->physician_name;
        $leave->position = $request->position;
        $leave->visit_type = $request->visit_type;
        $leave->medical_complex = $request->medical_complex;
        $leave->save();

        return back()->with('success', __('review-scene.created-success'));
    }
}
