<?php

use App\Http\Controllers\Admin\{
    DashboardController
};
use App\Http\Controllers\Site\{
    HomeController
};
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('site');
Route::get('/specialties', [HomeController::class, 'specialties'])->name('specialties');
Route::get('/professional', [HomeController::class, 'professional'])->name('professional');
Route::get('/patient', [HomeController::class, 'patient'])->name('patient');
Route::get('/create_schedule/{profissional_id}/{specialty_id}', [HomeController::class, 'create_schedule'])->name('create_schedule');
Route::post('/save_schedule', [HomeController::class, 'save_schedule'])->name('save_schedule');


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
