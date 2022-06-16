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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('kon');


// ROUTER NEW ADMIN PAGE 
Route::get('/multipilar/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/multipilar/admin/banner', [App\Http\Controllers\DashboardController::class, 'indexbanner'])->name('banner');
Route::get('/multipilar/admin/team', [App\Http\Controllers\DashboardController::class, 'indexteam'])->name('team');
Route::get('/multipilar/admin/blog', [App\Http\Controllers\DashboardController::class, 'indexblog'])->name('blog');
Route::get('/multipilar/admin/testimonial', [App\Http\Controllers\DashboardController::class, 'indextestimonial'])->name('testimonial');
Route::get('/multipilar/admin/gallery', [App\Http\Controllers\DashboardController::class, 'indexgallery'])->name('gallery');

Route::get('multipilar/admin/consultation', [App\Http\Controllers\DashboardController::class, 'indexconsultation'])->name('consultation');

// banner edit
Route::get('/multipilar/admin/banner-edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
// banner update
Route::post('/multipilar/admin/banner-update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');

// service index
Route::get('/multipilar/admin/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
//create service
Route::get('/multipilar/admin/service-create', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.create');
// service store
Route::post('/multipilar/admin/service-store', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
// service edit
Route::get('/multipilar/admin/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
// service destroy
Route::post('/multipilar/admin/service-destroy/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');
// service update
Route::post('/multipilar/admin/service-update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');

// count index
Route::get('/multipilar/admin/count', [App\Http\Controllers\CountController::class, 'index'])->name('count');
// count edit
Route::get('/multipilar/admin/count-edit/{id}', [App\Http\Controllers\CountController::class, 'edit'])->name('count.edit');
// count destroy
Route::post('/multipilar/admin/count-destroy/{id}', [App\Http\Controllers\CountController::class, 'destroy'])->name('count.destroy');
// count update
Route::post('/multipilar/admin/count-update/{id}', [App\Http\Controllers\CountController::class, 'update'])->name('count.update');

// team index
Route::get('/multipilar/admin/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
//create team
Route::get('/multipilar/admin/team-create', [App\Http\Controllers\TeamController::class, 'create'])->name('team.create');
// team store
Route::post('/multipilar/admin/team-store', [App\Http\Controllers\TeamController::class, 'store'])->name('team.store');
// team edit
Route::get('/multipilar/admin/team-edit/{id}', [App\Http\Controllers\TeamController::class, 'edit'])->name('team.edit');
// team destroy
Route::post('/multipilar/admin/team-destroy/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('team.destroy');
// team update
Route::post('/multipilar/admin/team-update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('team.update');

//create blog
Route::get('/multipilar/admin/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');

//blog detail
Route::get('/blog1', [App\Http\Controllers\BlogController::class, 'blog1'])->name('blog.blog1');
// blog store
Route::post('/multipilar/admin/blog-store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
// blog edit
Route::get('/multipilar/admin/blog-edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
// blog destroy
Route::post('/multipilar/admin/blog-destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');
// blog update
Route::post('/home/blog-update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');

// product
Route::get('/multipilar/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/multipilar/admin/product/create', [App\Http\Controllers\ProductController::class, 'createp'])->name('product.create');
Route::get('/multipilar/admin/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
// product update
Route::post('/multipilar/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/multipilar/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

//ADD NEW USER 
Route::get('/multipilar/admin/add/user', [App\Http\Controllers\DashboardController::class, 'storeuserr'])->name('adduser');
Route::post('/multipilar/admin/add/user/store', [App\Http\Controllers\DashboardController::class, 'storeuser'])->name('user.store');
Route::get('/multipilar/admin/add/user/edit', [App\Http\Controllers\DashboardController::class, 'edit'])->name('user.edit');
Route::post('/multipilar/admin/add/user/update', [App\Http\Controllers\DashboardController::class, 'update'])->name('user.update');
Route::post('/multipilar/admin/add/user/delete/{id}', [App\Http\Controllers\DashboardController::class, 'delete'])->name('user.delete');















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




//page simfoni bpr, simfoni lkm, simfoni bmt & simfoni mobile
Route::get('/simfonibpr', [App\Http\Controllers\ProductController::class, 'simfonibpr'])->name('product.simfonibpr');
Route::get('/simfonilkm', [App\Http\Controllers\ProductController::class, 'simfonilkm'])->name('product.simfonilkm');
Route::get('/simfonibmt', [App\Http\Controllers\ProductController::class, 'simfonibmt'])->name('product.simfonibmt');
Route::get('/simfonimobile', [App\Http\Controllers\ProductController::class, 'simfonimobile'])->name('product.simfonimobile');

// create consultation
Route::get('/consultation-create', [App\Http\Controllers\ConsultationController::class, 'create'])->name('consultation.create');
// consultation store
Route::post('/home/consultation-store', [App\Http\Controllers\ConsultationController::class, 'store'])->name('consultation.store');

// consultation destroy
Route::post('/home/consultation-destroy/{id}', [App\Http\Controllers\ConsultationController::class, 'destroy'])->name('consultation.destroy');









