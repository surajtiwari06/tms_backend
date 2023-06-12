<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/staffing', function () {
    return view('services.staffing');
})->name('staffing'); 


Route::get('/iot', function () {
    return view('services.iot');
})->name('iot'); 

Route::get('/ai_ml', function () {
    return view('services.aiml');
})->name('ai_ml'); 

Route::get('/di_bi', function () {
    return view('services.dibi');
})->name('di_bi'); 

Route::get('/dw_eng', function () {
    return view('services.datawarehouse');
})->name('dw_eng'); 

Route::get('/software', function () {
    return view('services.software');
})->name('software'); 

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/resume_parser', function () {
    return view('resume_parser');
})->name('resume_parser');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

// Route::resource('contact', [ContactController::class, 'store'])->name('contact.submit');
Route::resource('contact', ContactController::class);