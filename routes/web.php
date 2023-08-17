<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dbControl;
use App\Http\Controllers\MonitorSearchController;
use App\Http\Controllers\SendVrnController;
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

Route::get('/', [dbControl::class, 'searchTable']);

Route::get('/set', function () {
    return view('setting');
});
Route::get('/client', [dbControl::class, 'getUsers']);
    
Route::post('/searchMonitor', [MonitorSearchController::class, 'search']);

Route::post('/sendVRN', [SendVrnController::class, 'search']);

?>