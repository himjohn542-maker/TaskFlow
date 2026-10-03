<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo_listController;
use App\Http\Controllers\auth\authController;

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
})->name('introPage');

route::middleware('guest')->group(function () {
  //REGISTER ROUTES
Route::get('/register', [authController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [authController::class, 'register'])->name('register.form');

//LOGOUT ROUTES


//LOGIN ROUTES
Route::get('/login', [authController::class, 'showLoginForm'])->name('show.login');
Route::post('/login', [authController::class, 'login'])->name('login.form');

});
Route::get('/logout', [authController::class, 'logout'])->name('logout');


  Route::resource('todo_lists', Todo_listController::class)->middleware('auth');



