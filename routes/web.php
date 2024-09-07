<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableMrrController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\PDHourlyOutputControlller;
use App\Http\Controllers\HourlyOutputPDController;
use App\Http\Controllers\PullStrengthTestController;
use Illuminate\Support\Facades\Auth;
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

    //Production Hourly Ouput Export Excel
    Route::get('pdhourlyoutput/export/excel', [PDHourlyOutputControlller::class, 'export_excel']);

    // QC Daily Pull Strength Test Record
    Route::resource('/pullstrengthtest', PullStrengthTestController::class);
    //QC Daily Pull Strength Test Record filter
    Route::get('/filterpulstrength', [PullStrengthTestController::class, 'filterpulstrength']);
    //QC Daily Pull Strength Import Excel
    Route::get('/pullstrengthtest/import/excel', [PullStrengthTestController::class, 'pullstrength_import_excel']);
    //QC Daily Pull Strength Export Excel
    Route::get('/pullstrengthtest/export', [PullStrengthTestController::class, 'export']);
   
});




