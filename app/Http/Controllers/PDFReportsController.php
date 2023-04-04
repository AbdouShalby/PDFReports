<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFReportsController extends Controller
{
    public function createSickLeave() {
        return view('reports.create-sick-leave');
    }
    public function storeSickLeave(Request $request) {
        return view('reports.create-sick-leave');
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
