<?php

namespace App\Http\Controllers;

use App\Models\ReviewReport;
use App\Models\ReviewScene;
use App\Models\SickLeave;
use App\Models\SickLeaveFahd;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function qrcodeUrl($url)
    {
        $qrCode = QrCode::size(250)->generate($url);

        return response($qrCode)->header('Content-Type', 'image/svg+xml');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_sick_leaves = count(SickLeave::all());
        $latest_sick_leaves = SickLeave::latest('created_at')->take(5)->get();

        $count_sick_leaves_fahd = count(SickLeaveFahd::all());
        $latest_sick_leaves_fahd = SickLeaveFahd::latest('created_at')->take(5)->get();

        $count_review_reports = count(ReviewReport::all());
        $latest_review_reports = ReviewReport::latest('created_at')->take(5)->get();

        $count_review_scenes = count(ReviewScene::all());
        $latest_review_scenes = ReviewScene::latest('created_at')->take(5)->get();

        return view('home', [
            'count_sick_leaves' => $count_sick_leaves,
            'latest_sick_leaves' => $latest_sick_leaves,
            'count_sick_leaves_fahd' => $count_sick_leaves_fahd,
            'latest_sick_leaves_fahd' => $latest_sick_leaves_fahd,
            'count_review_reports' => $count_review_reports,
            'latest_review_reports' => $latest_review_reports,
            'count_review_scenes' => $count_review_scenes,
            'latest_review_scenes' => $latest_review_scenes,
        ]);
    }
}
