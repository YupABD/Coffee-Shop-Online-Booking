<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Main;
use App\Http\Controllers\Menu;
use App\Http\Controllers\Reservation;
use App\Http\Controllers\Service;
use App\Http\Controllers\Testers;
use App\Http\Controllers\login;
use App\Http\Controllers\registration;
use App\Http\Controllers\myorder;


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
//     return view('index');
// });


Route::get('/', [login::class, 'index'])->name('Login');

Route::get('/about', [About::class, 'index'])->name('about');
Route::get('/contact', [Contactcontroller::class, 'index'])->name('contact2');
Route::post('/contact', [Contactcontroller::class, 'contact'])->name('contact');
Route::get('/main', [Main::class, 'index'])->name('main');
Route::get('/menu', [Menu::class, 'index'])->name('menu');

Route::get('/reservation', [Reservation::class, 'index'])->name('reservation2');
Route::post('/reservation', [Reservation::class, 'reservation'])->name('reservation');

Route::get('/service', [Service::class, 'index'])->name('service');
Route::get('/testimonial', [Testers::class, 'index'])->name('testimonial');

Route::post('/Login-User', [login::class, 'login_user'])->name('Login-User');


Route::get('/registration', [registration::class, 'index'])->name('registration');
Route::post('/register', [registration::class, 'Register'])->name('register');

Route::get('/myorder', [myorder::class, 'index'])->name('myorder');
Route::get('/myorder/search', [Reservation::class, 'search'])->name('check_order');







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
