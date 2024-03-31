<?php

use App\Http\Controllers\EmailController;
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

Route::get('/', function () {
    return view('main');
})->name('index');

Route::get('/publishing', function () {
    return view('publishing.index');
})->name('publishing');

Route::get('/publishing/foundational', function () {
    return view('publishing.foundational');
})->name('publishing.foundational');

Route::get('/publishing/competent', function () {
    return view('publishing.competent');
})->name('publishing.competent');

Route::get('/publishing/virtouso', function () {
    return view('publishing.virtouso');
})->name('publishing.virtouso');


Route::get('/marketing', function () {
    return view('marketing');
})->name('marketing');

Route::post('/sendEmail', [EmailController::class, 'sendEmail'])->name('email');