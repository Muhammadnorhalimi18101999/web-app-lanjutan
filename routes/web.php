<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about-me', function () {
    return "Nama Saya <b>Muhammad Norhalimi</b>";

});

Route::get('/nim', function () {
    return "NIM <b>1811102441064</b>";

});

Route::get('/sd', function () {
    return "SD = <b>Madrasah Ibtidaiyah Al Mujadihidin</b>";

});

Route::get('/smp', function () {
    return "MTS = <b>Madrasah Tsanawiyah Negeri Model </b>";

});

Route::get('/sma', function () {
    return "MAN = <b>Madrasah Aliyah Negeri 1</b>";

});


Route::get("/testing-view", function () {
    return view("view-1");
});

Route::get("/testing-view2", function () {
    return view("view-2");
});

Route::get("/testing-view3", function () {
    return view("view-3");
});



Route::get("/testing-latihan1", function () {
    return view("latihan1");
});

Route::get("/testing-latihan2", function () {
    return view("latihan2");
});

Route::get("/testing-latihan3", function () {
    return view("latihan3");
});


use App\Http\Controllers\UtamaController;
use App\Http\Controllers\SecondController;

Route::get("/utama/test", [UtamaController::class, "test"]);
Route::get("/utama/test2", [UtamaController::class, "test2"]);
Route::get("/utama/test3", [UtamaController::class, "test3"]);


Route::get("/second/latihan1", [SecondController::class, "latihan1"]);
Route::get("/second/latihan2", [SecondController::class, "latihan2"]);
Route::get("/second/latihan3", [SecondController::class, "latihan3"]);
