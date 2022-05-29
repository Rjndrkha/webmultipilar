<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// kalau mau ke halaman login langsung tambahin /login di url begitupun kalo register 
//"http://127.0.0.1:8000/login" http://127.0.0.1:8000/register

Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/blog', function () {
    return view('blog');
});

// Route::get('/login', function () {
//     return view('admin.loginadmin');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//post banner store
Route::post('/banner/create', [App\Http\Controllers\BannerController::class, 'store'])->name('banners.store');



