<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Candidate\CandidateController;

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

Route::redirect('/', '/candidates/form');

Route::controller(CandidateController::class)->group(function () {
    Route::get('candidates/form', 'index')->name('candidates.index');
    Route::post('candidates/form', 'store')->name('candidates.store');
});


