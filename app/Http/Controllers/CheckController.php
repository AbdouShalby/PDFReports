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
    public function getSickLeaveData(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = SickLeave::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        if (!empty($data)) {

            return view('check.sick-leave', [
                'data' => $data,
            ]);

        } else {
            $errorMessage = __('check.wrong-data');
            return back()->withErrors([$errorMessage])->withInput();
        }
    }

    public function checkSickLeaveFahad() {
        return view('check.sick-leave-fahd');
    }
    public function getSickLeaveFahdData(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = SickLeaveFahd::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        if (!empty($data)) {

            return view('check.sick-leave-fahd', [
                'data' => $data,
            ]);

        } else {
            $errorMessage = __('check.wrong-data');
            return back()->withErrors([$errorMessage])->withInput();
        }
    }

    public function checkReviewReport() {
        return view('check.review-report');
    }
    public function getReviewReportData(Request $request) {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = ReviewReport::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        if (!empty($data)) {

            return view('check.review-report', [
                'data' => $data,
            ]);

        } else {
            $errorMessage = __('check.wrong-data');
            return back()->withErrors([$errorMessage])->withInput();
        }
    }

    public function checkReviewScene() {
        return view('check.review-scene');
    }
    public function getReviewSceneData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'leave_id' => 'required|string',
            'national_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = ReviewScene::where('leave_id', $request->leave_id)->where('national_id', $request->national_id)->first();

        if (!empty($data)) {

            return view('check.review-scene', [
                'data' => $data,
            ]);

        } else {
            $errorMessage = __('check.wrong-data');
            return back()->withErrors([$errorMessage])->withInput();
        }
    }
}
