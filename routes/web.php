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

Route::get('/check', [CheckController::class, 'check'])->name('check');

Route::get('/check/sick-leave', [CheckController::class, 'checkSickLeave'])->name('check-sick-leave');
Route::post('/check/show-sick-leave', [CheckController::class, 'showSickLeave'])->name('show-out-sick-leave');

Route::get('/check/sick-leave-fahad', [CheckController::class, 'checkSickLeaveFahad'])->name('check-sick-leave-fahad');
Route::post('/check/show-sick-leave-fahad', [CheckController::class, 'showSickLeaveFahad'])->name('show-out-sick-leave-fahad');

Route::get('/check/review-report', [CheckController::class, 'checkReviewReport'])->name('check-review-report');
Route::post('/check/show-review-report', [CheckController::class, 'showReviewReport'])->name('show-out-review-report');

Route::get('/check/review-scene', [CheckController::class, 'checkReviewScene'])->name('check-review-scene');
Route::post('/check/show-review-scene', [CheckController::class, 'showReviewScene'])->name('show-out-review-scene');

Route::get('/qrcode', [HomeController::class, 'qrcodeUrl'])->name('qrcode-url');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/all-sick-leave', [PDFReportsController::class, 'allSickLeave'])->name('all-sick-leaves');
    Route::get('/create-sick-leave', [PDFReportsController::class, 'createSickLeave'])->name('create-sick-leave');
    Route::post('/store-sick-leave', [PDFReportsController::class, 'storeSickLeave'])->name('store-sick-leave');
    Route::get('/edit-sick-leave/{id}', [PDFReportsController::class, 'editSickLeave'])->name('edit-sick-leave');
    Route::post('/update-sick-leave/{id}', [PDFReportsController::class, 'updateSickLeave'])->name('update-sick-leave');
    Route::get('/show-sick-leave/{id}', [PDFReportsController::class, 'showSickLeave'])->name('show-sick-leave');
    Route::get('/delete-sick-leave/{id}', [PDFReportsController::class, 'deleteSickLeave'])->name('delete-sick-leave');

    Route::get('/all-sick-leave-fahd', [PDFReportsController::class, 'allSickLeaveFahd'])->name('all-sick-leaves-fahd');
    Route::get('/create-sick-leave-fahd', [PDFReportsController::class, 'createSickLeaveFahd'])->name('create-sick-leave-fahd');
    Route::post('/store-sick-leave-fahd', [PDFReportsController::class, 'storeSickLeaveFahd'])->name('store-sick-leave-fahd');
    Route::get('/edit-sick-leave-fahd/{id}', [PDFReportsController::class, 'editSickLeaveFahd'])->name('edit-sick-leave-fahd');
    Route::post('/update-sick-leave-fahd/{id}', [PDFReportsController::class, 'updateSickLeaveFahd'])->name('update-sick-leave-fahd');
    Route::get('/show-sick-leave-fahd/{id}', [PDFReportsController::class, 'showSickLeaveFahd'])->name('show-sick-leave-fahd');
    Route::get('/delete-sick-leave-fahd/{id}', [PDFReportsController::class, 'deleteSickLeaveFahd'])->name('delete-sick-leave-fahd');

    Route::get('/all-review-report', [PDFReportsController::class, 'allReviewReport'])->name('all-review-reports');
    Route::get('/create-review-report', [PDFReportsController::class, 'createReviewReport'])->name('create-review-report');
    Route::post('/store-review-report', [PDFReportsController::class, 'storeReviewReport'])->name('store-review-report');
    Route::get('/edit-review-report/{id}', [PDFReportsController::class, 'editReviewReport'])->name('edit-review-report');
    Route::post('/update-review-report/{id}', [PDFReportsController::class, 'updateReviewReport'])->name('update-review-report');
    Route::get('/show-review-report/{id}', [PDFReportsController::class, 'showReviewReport'])->name('show-review-report');
    Route::get('/delete-review-report/{id}', [PDFReportsController::class, 'deleteReviewReport'])->name('delete-review-report');

    Route::get('/all-review-scene', [PDFReportsController::class, 'allReviewScene'])->name('all-review-scenes');
    Route::get('/create-review-scene', [PDFReportsController::class, 'createReviewScene'])->name('create-review-scene');
    Route::post('/store-review-scene', [PDFReportsController::class, 'storeReviewScene'])->name('store-review-scene');
    Route::get('/edit-review-scene/{id}', [PDFReportsController::class, 'editReviewScene'])->name('edit-review-scene');
    Route::post('/update-review-scene/{id}', [PDFReportsController::class, 'updateReviewScene'])->name('update-review-scene');
    Route::get('/show-review-scene/{id}', [PDFReportsController::class, 'showReviewScene'])->name('show-review-scene');
    Route::get('/delete-review-scene/{id}', [PDFReportsController::class, 'deleteReviewScene'])->name('delete-review-scene');

    Route::get('locale/{locale}',function($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    })->name('switchLang');
});
