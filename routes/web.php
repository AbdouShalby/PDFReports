<?php

use App\Http\Controllers\HomeController;
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

Route::get('/qrcode/{url}', [HomeController::class, 'qrcodeUrl'])->name('qrcode-url');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/sick-leave', [HomeController::class, 'sickLeave'])->name('sick-leave');
    Route::get('/sick-leave-fahd', [HomeController::class, 'sickLeaveFahd'])->name('sick-leave-fahd');
    Route::get('/review-report', [HomeController::class, 'reviewReport'])->name('review-report');
    Route::get('/review-scene', [HomeController::class, 'reviewScene'])->name('review-scene');

    Route::get('locale/{locale}',function($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    })->name('switchLang');
});
