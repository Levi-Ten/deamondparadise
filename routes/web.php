<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\NewsController;
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
Route::get('/', [NewsController::class, 'newsHome'])->name('site.home');
Route::get('/about', function () {
    return view('site/about');
});

Route::get('services', [PriceController::class, 'service'])->name('site.service');
Route::get('news', [NewsController::class, 'news'])->name('site.news');
Route::get('/detailNews/{news}', [NewsController::class, 'detailNews'])->name('news.detailNews');
Route::get('/contacts', function () {
    return view('site/contacts');
});
Route::get('admin', function () {
    return view('auth.register');
});
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
     Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
     Route::resource('prices', PriceController::class);
     Route::get('/admin/settings',[MainController::class,'settings']); 
     Route::resource('/admin/news', NewsController::class);
     Route::get('/admin/staff',[MainController::class,'staff']);
});

//route for mail
    Route::post('/contact-us',[ContactUsController::class, 'sendEmail'])->name('contacUs');
