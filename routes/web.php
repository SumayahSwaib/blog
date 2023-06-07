<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('login', function () { return view('login');}) ->name('login'); 
Route::post('login', function () { return view('login');}) ->name('login'); 

Route::get('regester', function () { return view('regester');}) ->name('regester'); 
 Route::post('regester', [HomeController::class, 'regester'])->name('regester');
 Route::get('/news/{id}', [HomeController::class, 'news'])->name('news');

 Route::get('dashboard/', function () { return view('dashboard/index');}) ->name('dashboard'); 
 Route::post('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 
 


/*  Route::get('dashboard/categories', function () { return view('categories');}) ->name('categories'); 
 */ Route::get('dashboard/categories/create', [DashboardController::class, 'categories_create'])->name('create');
  Route::get('dashboard/categories-create', [DashboardController::class, 'categories_create'])->name('categories-create');
 Route::post('dashboard/categories-create', [DashboardController::class, 'categories_store'])->name('categories-create');
  Route::get('dashboard/categories', [DashboardController::class, 'categories'])->name('categories'); 
  Route::post('dashboard/categories', [DashboardController::class, 'categories'])->name('dashboard/categories'); 
  Route::get('dashboard/posts/{post_id}', [DashboardController::class, 'edit'])->name('dashboard/edit'); 
 
  Route::resource( 'dashboard/posts',PostResource::class,); 
/*   Route::resource( 'dashboard/posts/edit',PostResource::class,); 
 */ 

/* Route::get('/', [HomeController::class, 'getData']);
 */ 








 /* Route::get('login', function () {
    if (Auth::check()) {
        return redirect()->intended('dashboard');
    }
     return view('login');}) ->name('login'); 
 Route::post('login', function () {
    if (Auth::check()) {
        return redirect()->intended('dashboard');
    }
     return view('login');}) ->name('login'); 

     Route::get('logout', function () { return view('logout');}) ->name('logout'); 


 

 Route::post('dashboard', function () { return view('dashboard');}) ->name('dashboard'); 
 */


/* 
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/our-services', [HomeController::class, 'services'])->name('services');
Route::get('/model-save', [HomeController::class, 'model_save'])->name('model-save');
Route::get('/quering', [HomeController::class, 'quering'])->name('quering');
Route::get('/relationships', [HomeController::class, 'relationships'])->name('relationships');

 */

