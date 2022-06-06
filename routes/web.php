<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('index');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('index');


// ROUTER NEW ADMIN PAGE 
Route::get('/multipilar/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/multipilar/admin/banner', [App\Http\Controllers\DashboardController::class, 'indexbanner'])->name('banner');
Route::get('/multipilar/admin/team', [App\Http\Controllers\DashboardController::class, 'indexteam'])->name('team');


// banner edit
Route::get('/dashboard/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
// banner update
Route::post('/dashboard/banner/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');

//create service
Route::get('/home/service-create', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.create');
// service store
Route::post('/home/service-store', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
// service edit
Route::get('/home/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
// service destroy
Route::post('/home/service-destroy/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');
// service update
Route::post('/home/service-update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');

//create team
Route::get('/home/team-create', [App\Http\Controllers\TeamController::class, 'create'])->name('team.create');
// team store
Route::post('/home/team-store', [App\Http\Controllers\TeamController::class, 'store'])->name('team.store');
// team edit
Route::get('/home/team-edit/{id}', [App\Http\Controllers\TeamController::class, 'edit'])->name('team.edit');
// team destroy
Route::post('/home/team-destroy/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('team.destroy');
// team update
Route::post('/home/team-update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('team.update');



//create blog
Route::get('/home/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');

//blog detail
Route::get('/blog1', [App\Http\Controllers\BlogController::class, 'blog1'])->name('blog.blog1');

// blog store
Route::post('/home/blog-store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
// blog edit
Route::get('/home/blog-edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
// blog destroy
Route::post('/home/blog-destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');
// blog update
Route::post('/home/blog-update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');

// create testimonial
Route::get('/home/testimonial-create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('testimonial.create');
// testimonial store
Route::post('/home/testimonial-store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store');
// testimonial edit
Route::get('/home/testimonial-edit/{id}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonial.edit');
// testimonial destroy
Route::post('/home/testimonial-destroy/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonial.destroy');
// testimonial update
Route::post('/home/testimonial-update/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonial.update');

// create gallery
Route::get('/home/gallery-create', [App\Http\Controllers\GalleryController::class, 'create'])->name('gallery.create');
// gallery store
Route::post('/home/gallery-store', [App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.store');
// gallery edit
Route::get('/home/gallery-edit/{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('gallery.edit');
// gallery destroy
Route::post('/home/gallery-destroy/{id}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('gallery.destroy');
// gallery update
Route::post('/home/gallery-update/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('gallery.update');


// count edit
Route::get('/home/count-edit/{id}', [App\Http\Controllers\CountController::class, 'edit'])->name('count.edit');
// count destroy
Route::post('/home/count-destroy/{id}', [App\Http\Controllers\CountController::class, 'destroy'])->name('count.destroy');
// count update
Route::post('/home/count-update/{id}', [App\Http\Controllers\CountController::class, 'update'])->name('count.update');

//page simfoni bpr, simfoni lkm, simfoni bmt & simfoni mobile
Route::get('/simfonibpr', [App\Http\Controllers\ProductController::class, 'simfonibpr'])->name('product.simfonibpr');
Route::get('/simfonilkm', [App\Http\Controllers\ProductController::class, 'simfonilkm'])->name('product.simfonilkm');
Route::get('/simfonibmt', [App\Http\Controllers\ProductController::class, 'simfonibmt'])->name('product.simfonibmt');
Route::get('/simfonimobile', [App\Http\Controllers\ProductController::class, 'simfonimobile'])->name('product.simfonimobile');






