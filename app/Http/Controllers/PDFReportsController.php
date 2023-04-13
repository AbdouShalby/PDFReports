<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\ReviewReport;
use App\Models\ReviewScene;
use App\Models\SickLeave;
use App\Models\SickLeaveFahd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PDFReportsController extends Controller
{
    /* Start Of Sick Leaves Actions */
    public function allSickLeave() {
        $sick_leaves = SickLeave::orderByDesc('created_at')->paginate(20);
        return view('reports.all-sick-leaves', [
            'sick_leaves' => $sick_leaves
        ]);
    }

    public function createSickLeave() {
        return view('reports.create-sick-leave');
    }

    public function storeSickLeave(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_start' => 'required|date',
            'leave_end' => 'required|date',
            'issue_date' => 'required|date',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
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

        $leave_start = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_start)->startOfDay();
        $leave_end = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_end)->startOfDay();
        $duration = $leave_end->diffInDays($leave_start);

        $leave = new SickLeave();
        $leave->leave_id = generateLeaveID();
        $leave->leave_start = $request->leave_start;
        $leave->leave_end = $request->leave_end;
        $leave->leave_duration = $duration;
        $leave->issue_date = $request->issue_date;
        $leave->name_en = $request->name_en;
        $leave->name_ar = $request->name_ar;
        $leave->national_id = $request->national_id;
        $leave->nationality_en = $request->nationality_en;
        $leave->nationality_ar = $request->nationality_ar;
        $leave->employer = $request->employer;
        $leave->physician_name_en = $request->physician_name_en;
        $leave->physician_name_ar = $request->physician_name_ar;
        $leave->position_en = $request->position_en;
        $leave->position_ar = $request->position_ar;
        $leave->medical_complex_en = $request->medical_complex_en;
        $leave->medical_complex_ar = $request->medical_complex_ar;
        $leave->save();

        return back()->with('success', __('sick-leave.created-success'));
    }

    public function editSickLeave($id) {
        $report = SickLeave::where('id', $id)->first();
        return view('reports.edit-sick-leave', [
            'report' => $report
        ]);
    }

    public function updateSickLeave(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'leave_start' => 'required|date',
            'leave_end' => 'required|date',
            'issue_date' => 'required|date',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $leave_start = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_start)->startOfDay();
        $leave_end = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_end)->startOfDay();
        $duration = $leave_end->diffInDays($leave_start);

        SickLeave::where('id', $id)->update([
            'leave_start' => $request->leave_start,
            'leave_end' => $request->leave_end,
            'leave_duration' => $duration,
            'issue_date' => $request->issue_date,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'national_id' => $request->national_id,
            'nationality_en' => $request->nationality_en,
            'nationality_ar' => $request->nationality_ar,
            'employer' => $request->employer,
            'physician_name_en' => $request->physician_name_en,
            'physician_name_ar' => $request->physician_name_ar,
            'position_en' => $request->position_en,
            'position_ar' => $request->position_ar,
            'medical_complex_en' => $request->medical_complex_en,
            'medical_complex_ar' => $request->medical_complex_ar,
        ]);

        return back()->with('success', __('sick-leave.updated-success'));
    }

    public function showSickLeave($id) {
        $report = SickLeave::where('id', $id)->first();
        $hijri_start = Hijri::Date('Y/m/d', $report->leave_start);
        $hijri_end = Hijri::Date('Y/m/d', $report->leave_end);
        return view('reports.show-sick-leave', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }

    public function deleteSickLeave($id) {
        $report = SickLeave::findOrFail($id);

        $report->delete();

        return back()->with('success', __('sick-leave.deleted'));
    }
    /* End Of Sick Leaves Actions */



    /* Start Of Sick Leaves Fahd Actions */
    public function allSickLeaveFahd() {
        $sick_leaves_fahd = SickLeaveFahd::orderByDesc('created_at')->paginate(20);
        return view('reports.all-sick-leaves-fahd', [
            'sick_leaves_fahd' => $sick_leaves_fahd
        ]);
    }

    public function createSickLeaveFahd() {
        return view('reports.create-sick-leave-fahd');
    }

    public function storeSickLeaveFahd(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_start' => 'required|date',
            'leave_end' => 'required|date',
            'issue_date' => 'required|date',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'diagnosis_en' => 'required|string',
            'diagnosis_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
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

        $leave_start = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_start)->startOfDay();
        $leave_end = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_end)->startOfDay();
        $duration = $leave_end->diffInDays($leave_start);

        $leave = new SickLeaveFahd();
        $leave->leave_id = generateLeaveID();
        $leave->leave_start = $request->leave_start;
        $leave->leave_end = $request->leave_end;
        $leave->leave_duration = $duration;
        $leave->issue_date = $request->issue_date;
        $leave->name_en = $request->name_en;
        $leave->name_ar = $request->name_ar;
        $leave->national_id = $request->national_id;
        $leave->nationality_en = $request->nationality_en;
        $leave->nationality_ar = $request->nationality_en;
        $leave->employer = $request->employer;
        $leave->physician_name_en = $request->physician_name_en;
        $leave->physician_name_ar = $request->physician_name_ar;
        $leave->position_en = $request->position_en;
        $leave->position_ar = $request->position_ar;
        $leave->diagnosis_en = $request->diagnosis_en;
        $leave->diagnosis_ar = $request->diagnosis_ar;
        $leave->medical_complex_en = $request->medical_complex_en;
        $leave->medical_complex_ar = $request->medical_complex_ar;
        $leave->save();

        return back()->with('success', __('sick-leave-fahd.created-success'));
    }

    public function editSickLeaveFahd($id) {
        $report = SickLeaveFahd::where('id', $id)->first();
        return view('reports.edit-sick-leave-fahd', [
            'report' => $report
        ]);
    }

    public function updateSickLeaveFahd(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'leave_start' => 'required|date',
            'leave_end' => 'required|date',
            'issue_date' => 'required|date',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'diagnosis_en' => 'required|string',
            'diagnosis_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $leave_start = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_start)->startOfDay();
        $leave_end = \Carbon\Carbon::createFromFormat('Y-m-d', $request->leave_end)->startOfDay();
        $duration = $leave_end->diffInDays($leave_start);

        SickLeaveFahd::where('id', $id)->update([
            'leave_start' => $request->leave_start,
            'leave_end' => $request->leave_end,
            'leave_duration' => $duration,
            'issue_date' => $request->issue_date,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'national_id' => $request->national_id,
            'nationality_en' => $request->nationality_en,
            'nationality_ar' => $request->nationality_ar,
            'employer' => $request->employer,
            'physician_name_en' => $request->physician_name_en,
            'physician_name_ar' => $request->physician_name_ar,
            'position_en' => $request->position_en,
            'position_ar' => $request->position_ar,
            'diagnosis_en' => $request->diagnosis_en,
            'diagnosis_ar' => $request->diagnosis_ar,
            'medical_complex_en' => $request->medical_complex_en,
            'medical_complex_ar' => $request->medical_complex_ar,
        ]);

        return back()->with('success', __('sick-leave-fahd.updated-success'));
    }

    public function showSickLeaveFahd($id) {
        $report = SickLeaveFahd::where('id', $id)->first();
        $hijri_start = Hijri::Date('Y/m/d', $report->leave_start);
        $hijri_end = Hijri::Date('Y/m/d', $report->leave_end);
        return view('reports.show-sick-leave-fahd', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }

    public function deleteSickLeaveFahd($id) {
        $report = SickLeaveFahd::findOrFail($id);

        $report->delete();

        return back()->with('success', __('sick-leave-fahd.deleted'));
    }
    /* End Of Sick Leaves Fahd Actions */



    /* Start Of Reviews Reports Actions */
    public function allReviewReport() {
        $review_reports = ReviewReport::orderByDesc('created_at')->paginate(20);
        return view('reports.all-review-reports', [
            'review_reports' => $review_reports
        ]);
    }

    public function createReviewReport() {
        return view('reports.create-review-report');
    }

    public function storeReviewReport(Request $request) {
        $validator = Validator::make($request->all(), [
            'national_id' => 'required|numeric',
            'national_type' => 'required|string',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'print_date' => 'required|date',
            'nationality' => 'required|string',
            'birth_date' => 'required|date',
            'work' => 'required|string',
            'admission' => 'required|date',
            'discharge' => 'required|date',
            'review_date' => 'required|date',
            'details' => 'required|string',
            'physician_name' => 'required|string',
            'physician_position' => 'required|string',
            'status' => 'required|in:0,1,2'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        function generateLeaveID() {
            do {
                $random = rand(1000, 9999); // generates a random 7-digit number
                $id = '12'.$random; // concatenates the string 'PSL2303' with the random number
            } while (ReviewReport::where('leave_id', $id)->exists()); // loops until a unique leave_id is generated
            return $id; // returns the generated leave_id
        }

        $leave = new ReviewReport();
        $leave->leave_id = generateLeaveID();
        $leave->national_id = $request->national_id;
        $leave->national_type = $request->national_type;
        $leave->name_en = $request->name_en;
        $leave->name_ar = $request->name_ar;
        $leave->print_date = $request->print_date;
        $leave->nationality = $request->nationality;
        $leave->birth_date = $request->birth_date;
        $leave->work = $request->work;
        $leave->admission = $request->admission;
        $leave->discharge = $request->discharge;
        $leave->review_date = $request->review_date;
        $leave->details = $request->details;
        $leave->physician_name = $request->physician_name;
        $leave->physician_position = $request->physician_position;
        $leave->status = $request->status;
        $leave->save();

        return back()->with('success', __('review-report.created-success'));
    }

    public function editReviewReport($id) {
        $report = ReviewReport::where('id', $id)->first();
        return view('reports.edit-review-report', [
            'report' => $report
        ]);
    }

    public function updateReviewReport(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'national_id' => 'required|numeric',
            'national_type' => 'required|string',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'print_date' => 'required|date',
            'nationality' => 'required|string',
            'birth_date' => 'required|date',
            'work' => 'required|string',
            'admission' => 'required|date',
            'discharge' => 'required|date',
            'review_date' => 'required|date',
            'details' => 'required|string',
            'physician_name' => 'required|string',
            'physician_position' => 'required|string',
            'status' => 'required|in:0,1,2'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $report = ReviewReport::where('id', $id)->first();

        ReviewReport::where('id', $id)->update([
            'national_id' => $request->national_id,
            'national_type' => $request->national_type,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'print_date' => $request->print_date,
            'nationality' => $request->nationality,
            'birth_date' => $request->birth_date,
            'work' => $request->work,
            'admission' => $request->admission,
            'discharge' => $request->discharge,
            'review_date' => $request->discharge,
            'details' => $request->details,
            'physician_name' => $request->physician_name,
            'physician_position' => $request->physician_position,
            'status' => $request->status,
        ]);

        return back()->with('success', __('review-report.updated-success'));
    }

    public function showReviewReport($id) {
        $report = ReviewReport::where('id', $id)->first();
        return view('reports.show-review-report', [
            'report' => $report
        ]);
    }

    public function deleteReviewReport($id) {
        $report = ReviewReport::findOrFail($id);

        $report->delete();

        return back()->with('success', __('review-report.deleted'));
    }
    /* End Of Reviews Reports Actions */



    /* Start Of Reviews Scenes Actions */
    public function allReviewScene() {
        $review_scenes = ReviewScene::orderByDesc('created_at')->paginate(20);
        return view('reports.all-review-scenes', [
            'review_scenes' => $review_scenes
        ]);
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
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'visit_type_en' => 'required|string',
            'visit_type_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
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
        $leave->name_en = $request->name_en;
        $leave->name_ar = $request->name_ar;
        $leave->national_id = $request->national_id;
        $leave->nationality_en = $request->nationality_en;
        $leave->nationality_ar = $request->nationality_ar;
        $leave->employer = $request->employer;
        $leave->physician_name_en = $request->physician_name_en;
        $leave->physician_name_ar = $request->physician_name_ar;
        $leave->position_en = $request->position_en;
        $leave->position_ar = $request->position_ar;
        $leave->visit_type_en = $request->visit_type_en;
        $leave->visit_type_ar = $request->visit_type_ar;
        $leave->medical_complex_en = $request->medical_complex_en;
        $leave->medical_complex_ar = $request->medical_complex_ar;
        $leave->save();

        return back()->with('success', __('review-scene.created-success'));
    }

    public function editReviewScene($id) {
        $report = ReviewScene::where('id', $id)->first();
        return view('reports.edit-review-scene', [
            'report' => $report
        ]);
    }

    public function updateReviewScene(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'admission' => 'required|date',
            'discharge' => 'required|date',
            'waiting_period' => 'required|numeric',
            'issue_date' => 'required|date',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'national_id' => 'required|numeric',
            'nationality_en' => 'required|string',
            'nationality_ar' => 'required|string',
            'employer' => 'required|string',
            'physician_name_en' => 'required|string',
            'physician_name_ar' => 'required|string',
            'position_en' => 'required|string',
            'position_ar' => 'required|string',
            'visit_type_en' => 'required|string',
            'visit_type_ar' => 'required|string',
            'medical_complex_en' => 'required|string',
            'medical_complex_ar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        ReviewReport::where('id', $id)->update([
            'admission' => $request->admission,
            'discharge' => $request->discharge,
            'waiting_period' => $request->waiting_period,
            'issue_date' => $request->issue_date,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'national_id' => $request->national_id,
            'nationality_en' => $request->nationality_en,
            'nationality_ar' => $request->nationality_ar,
            'employer' => $request->employer,
            'physician_name_en' => $request->physician_name_en,
            'physician_name_ar' => $request->physician_name_ar,
            'position_en' => $request->position_en,
            'position_ar' => $request->position_ar,
            'visit_type_en' => $request->visit_type_en,
            'visit_type_ar' => $request->visit_type_ar,
            'medical_complex_en' => $request->medical_complex_en,
            'medical_complex_ar' => $request->medical_complex_ar,
        ]);

        return back()->with('success', __('review-scene.updated-success'));
    }

    public function showReviewScene($id) {
        $report = ReviewScene::where('id', $id)->first();
        $hijri_start = Hijri::Date('A h:i d/m/Y', $report->admission);
        $hijri_end = Hijri::Date('A h:i d/m/Y', $report->discharge);
        return view('reports.show-review-scene', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }

    public function deleteReviewScene($id) {
        $report = ReviewScene::findOrFail($id);

        $report->delete();

        return back()->with('success', __('review-scene.deleted'));
    }
    /* Start Of Reviews Scenes Actions */
}
