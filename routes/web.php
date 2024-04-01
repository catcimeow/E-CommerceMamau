<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function() {
   return view('dashboard');
    })->name('dashboard');


 Route::get('/dashboard', function () {
         return view('dashboard');
 });

 
 Route::get('/homePage', function () {
    return view('homePage');
});

 
Route::get('/About', function () {
    return view('About');
});

Route::get('/adminNavPanel', function () {
    return view('adminNavPanel');
});

Route::get('/adminProfile', function () {
    return view('adminProfile');
});


Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});


Route::Post('/redirect', [HomeController::class, 'redirect'])->name('login.redirect');
