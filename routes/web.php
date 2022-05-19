<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquinoxController;
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

Route::get('/',[EquinoxController::class, 'index'])->name('live.index');
Route::get('/about-us',[EquinoxController::class, 'about'])->name('live.pages.about_us');
Route::get('/services',[EquinoxController::class, 'services'])->name('live.pages.services');
Route::get('/contact-us',[EquinoxController::class, 'contact_us'])->name('live.pages.contact-us');
Route::get('/error',[EquinoxController::class, 'error'])->name('live.pages.error');
Route::get('/coming-soon',[EquinoxController::class, 'coming_soon'])->name('live.pages.coming-soon');