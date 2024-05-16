<?php

use App\Http\Controllers\AppExController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrController;
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

// Home
Route::get('/', [MainController::class, 'allData'])->name('home');

// Kourse B
Route::get('/kursB', [MainController::class, 'kursB'])->name('kursB');

// Kourse A
Route::get('/kursA', [MainController::class, 'kursA'])->name('kursA');

// Price
Route::get('/price', [MainController::class, 'price'])->name('price');
Route::get('/price/add/create', [MainController::class, 'priceCreate'])->name('price.create');
Route::post('/price/add/store', [MainController::class, 'priceStore'])->name('price.store');
Route::get('/price/edit/{id}', [MainController::class, 'priceEdit'])->name('price.edit');
Route::post('/price/edit/update/{id}', [MainController::class, 'priceUpdate'])->name('price.update');
Route::post('/price/delete/{id}', [MainController::class, 'priceDelete'])->name('price.delete');

// instructors
Route::resource('/instructor', InstructorsController::class);

// Auth
Route::resource('reg', RegistrController::class);
Route::resource('login', AuthController::class);
Route::get('logOut', [AuthController::class, 'logOut'])->name('logOut');

// Admin Panel
Route::get('admin', [MainController::class, 'adminPanel'])->name('adminPanel');
Route::post('adminDelete/{id}', [MainController::class, 'adminDelete'])->name('adminDelete');
Route::post('adminDelete/application/{id}', [MainController::class, 'adminDeleteApp'])->name('adminDeleteApp');

// WriteCourse
Route::get('/write/app/ex/{id}', [AppExController::class, 'store'])->name('appEx.store');
Route::get('/write/app/{id}', [AppExController::class, 'storeApp'])->name('app.store');

// Profile
Route::resource('/profile', ProfileController::class);
Route::post('/profile/add/photo/{id}', [ProfileController::class, 'store'])->name('profile.addPhoto');
