<?php

namespace App\Http\Controllers;

use App\Models\ReviewReport;
use App\Models\ReviewScene;
use App\Models\SickLeave;
use App\Models\SickLeaveFahd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alkoumi\LaravelHijriDate\Hijri;

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

        $hijri_start = Hijri::Date('Y/m/d', $report->leave_start);
        $hijri_end = Hijri::Date('Y/m/d', $report->leave_end);

        return view('reports.sick-leave', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }

    public function checkSickLeaveFahad() {
        return view('check.sick-leave-fahd');
    }
    public function showSickLeaveFahad(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $report = SickLeaveFahd::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        $hijri_start = Hijri::Date('Y/m/d', $report->leave_start);
        $hijri_end = Hijri::Date('Y/m/d', $report->leave_end);

        return view('reports.sick-leave-fahd', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }

    public function checkReviewReport() {
        return view('check.review-report');
    }
    public function showReviewReport(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $report = ReviewReport::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        return view('reports.review-report', [
            'report' => $report
        ]);
    }

    public function checkReviewScene() {
        return view('check.review-scene');
    }
    public function showReviewScene(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $report = ReviewScene::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        $hijri_start = Hijri::Date('A h:i d/m/Y', $report->admission);
        $hijri_end = Hijri::Date('A h:i d/m/Y', $report->discharge);

        return view('reports.review-scene', [
            'report' => $report,
            'hijri_start' => $hijri_start,
            'hijri_end' => $hijri_end,
        ]);
    }
}
