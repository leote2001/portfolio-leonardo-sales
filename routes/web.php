<?php
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\DownloadController;

use Illuminate\Support\Facades\Route;
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
Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("/lang/{locale}", [LocalizationController::class, "setLocale"])->name("set-locale");
Route::get("/download", [DownloadController::class, "downloadCv"])->name("download");

Route::get("/download", [DownloadController::class, "downloadCv"])->name("download");

Route::post("/contact-form", [ContactFormController::class, "store"])->name("contact-form");

