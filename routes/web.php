<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//all Admin Routes
Route::controller(AdminController::class)->group(function (){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/admin/profile/edit', 'EditProfile')->name('admin.profile.edit');
    Route::post('/admin/profile/update', 'UpdateProfile')->name('admin.profile.update');
    Route::get('/admin/profile/change_password', 'Change_password')->name('admin.change_password');
    Route::post('/admin/password/update', 'UpdatePassword')->name('admin.password.update');
});
//home slider routes
Route::controller(HomeSliderController::class)->group(function (){
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/home/slider/update', 'UpdateSlider')->name('home.slide.update');
});
// about us routes
Route::controller(AboutController::class)->group(function (){
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/about/page/update', 'UpdateAboutPage')->name('about.page.update');
    Route::get('/about', 'HomeAbout')->name('home.about');
});
//front-office routes
Route::get('/', function () {
    return view('front-office.index');
});
require __DIR__.'/auth.php';
