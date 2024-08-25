<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableMrrController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\PDHourlyOutputControlller;
use App\Http\Controllers\HourlyOutputPDController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [DashboardController::class,'dashboard']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('index');
// });
Auth::routes();

Route::get('/', [OtentikasiController::class, 'index']);
// Route::post('/loginn', [OtentikasiController::class, 'loginn']);


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/mrr', [TableMrrController::class, 'menuMrr']);
    Route::get('/edit/{id}', [TableMrrController::class, 'edit'])->name('mrr.edit');
    Route::put('/request/{id}', [TableMrrController::class, 'update'])->name('mrr.update');

    //Production Hourly Output Fix
    Route::get('/hourlyoutputpd', [HourlyOutputPDController::class, 'index']);
    
    //Production Hourly Output Controller
    Route::resource('/pdhourlyoutput', PDHourlyOutputControlller::class);

    //Production Hourly Output Filter by date
    Route::get('/filter', [PDHourlyOutputControlller::class, 'filter']);

    //Production Hourly Output PDF
    Route::get('/pdhourlyoutput/view/pdf', [PDHourlyOutputControlller::class, 'view_pdf']);
    Route::get('/pdhourlyoutput/download/pdf', [PDHourlyOutputControlller::class, 'download_pdf']);
});





