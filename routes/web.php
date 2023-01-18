<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UangtersediaController;
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

// Bagian help
Route::get('/help', [HelpController::class, 'help'])->name('help');
// Route::get('/help', function (){
//     return view('help', ["title" => "Help"]);
// });

// Bagian Home
Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

// Bagian Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Bagian Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, "dashboard"])->name("dashboard")->middleware('auth');

// Bagian Pendapatan
Route::get('/indexPendapatan', [PendapatanController::class, "index"])->name("indexPendapatan")->middleware('auth');
Route::get('/createPendapatan', [PendapatanController::class, "create"])->name("createPendapatan")->middleware('auth');
Route::post('/storePendapatan', [PendapatanController::class, "store"])->name("storePendapatan")->middleware('auth');
Route::get('/edit/{id}Pendapatan', [PendapatanController::class, "edit"])->name("editPendapatan")->middleware('auth');
Route::post('/update/{id}Pendapatan', [PendapatanController::class, "update"])->name("updatePendapatan")->middleware('auth');
Route::get('/delete/{id}Pendapatan', [PendapatanController::class, "delete"])->name("deletePendapatan")->middleware('auth');

// Bagian Pengeluaran
Route::get('/indexPengeluaran', [PengeluaranController::class, "index"])->name("indexPengeluaran")->middleware('auth');
Route::get('/createPengeluaran', [PengeluaranController::class, "create"])->name("createPengeluaran")->middleware('auth');
Route::post('/storePengeluaran', [PengeluaranController::class, "store"])->name("storePengeluaran")->middleware('auth');
Route::get('/edit/{id}Pengeluaran', [PengeluaranController::class, "edit"])->name("editPengeluaran")->middleware('auth');
Route::post('/update/{id}Pengeluaran', [PengeluaranController::class, "update"])->name("updatePengeluaran")->middleware('auth');
Route::get('/delete/{id}Pengeluaran', [PengeluaranController::class, "delete"])->name("deletePengeluaran")->middleware('auth');

// Bagian Uang Tersedia
Route::get('/indexUangtersedia', [UangtersediaController::class, "index"])->name("indexUangtersedia")->middleware('auth');
Route::get('/createUangtersedia', [UangtersediaController::class, "create"])->name("createUangtersedia")->middleware('auth');
Route::post('/storeUangtersedia', [UangtersediaController::class, "store"])->name("storeUangtersedia")->middleware('auth');
Route::get('/edit/{id}Uangtersedia', [UangtersediaController::class, "edit"])->name("editUangtersedia")->middleware('auth');
Route::post('/update/{id}Uangtersedia', [UangtersediaController::class, "update"])->name("updateUangtersedia")->middleware('auth');
Route::get('/delete/{id}Uangtersedia', [UangtersediaController::class, "delete"])->name("deleteUangtersedia")->middleware('auth');
