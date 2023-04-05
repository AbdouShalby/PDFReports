<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PDFReportsController;
    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/check', [CheckController::class, 'check'])->name('qrcode-url');
Route::get('/check/sick-leave', [CheckController::class, 'checkSickLeave'])->name('check-sick-leave');

Route::get('/qrcode', [HomeController::class, 'qrcodeUrl'])->name('qrcode-url');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/all-sick-leave', [PDFReportsController::class, 'allSickLeave'])->name('all-sick-leaves');
    Route::get('/create-sick-leave', [PDFReportsController::class, 'createSickLeave'])->name('create-sick-leave');
    Route::post('/store-sick-leave', [PDFReportsController::class, 'storeSickLeave'])->name('store-sick-leave');

    Route::get('/all-sick-leave-fahd', [PDFReportsController::class, 'allSickLeaveFahd'])->name('all-sick-leaves-fahd');
    Route::get('/create-sick-leave-fahd', [PDFReportsController::class, 'createSickLeaveFahd'])->name('create-sick-leave-fahd');
    Route::post('/store-sick-leave-fahd', [PDFReportsController::class, 'storeSickLeaveFahd'])->name('store-sick-leave-fahd');

    Route::get('/all-review-report', [PDFReportsController::class, 'allReviewReport'])->name('all-review-reports');
    Route::get('/create-review-report', [PDFReportsController::class, 'createReviewReport'])->name('create-review-report');
    Route::post('/store-review-report', [PDFReportsController::class, 'storeReviewReport'])->name('store-review-report');

    Route::get('/all-review-scene', [PDFReportsController::class, 'allReviewScene'])->name('all-review-scenes');
    Route::get('/create-review-scene', [PDFReportsController::class, 'createReviewScene'])->name('create-review-scene');
    Route::post('/store-review-scene', [PDFReportsController::class, 'storeReviewScene'])->name('store-review-scene');

    Route::get('/sick-leave', [PDFReportsController::class, 'sickLeave'])->name('sick-leave');
    Route::get('/sick-leave-fahd', [PDFReportsController::class, 'sickLeaveFahd'])->name('sick-leave-fahd');
    Route::get('/review-report', [PDFReportsController::class, 'reviewReport'])->name('review-report');
    Route::get('/review-scene', [PDFReportsController::class, 'reviewScene'])->name('review-scene');

    Route::get('locale/{locale}',function($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    })->name('switchLang');
});
