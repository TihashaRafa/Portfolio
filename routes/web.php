<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SidebarTwoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class,'index'])->name('');

Route::get('/admin/login', [AdminController::class,'admin'])->name('');
Route::get('/home', [SideBarController::class,''])->name('');


Route::group(['prefix' => 'sidebar'], function () {
    Route::get('/', [SideBarController::class, 'create'])->name('sidebar.create');
    Route::post('/add', [SideBarController::class, 'store'])->name('sidebar.add');
    Route::get('/index', [SideBarController::class, 'index'])->name('sidebar.index');
    Route::get('/edit/{id}', [SideBarController::class, 'edit'])->name('sidebar.edit');
    Route::post('/update/{id}', [SideBarController::class, 'update'])->name('sidebar.update');
    Route::get('/delete/{id}', [SideBarController::class, 'destroy'])->name('sidebar.delete');
});


Route::group(['prefix' => 'sidebars'], function () {
    Route::get('/', [SidebarTwoController::class, 'create'])->name('sidebars.create');
    Route::post('/add', [SidebarTwoController::class, 'store'])->name('sidebars.add');
    Route::get('/index', [SidebarTwoController::class, 'index'])->name('sidebars.index');
    Route::get('/edit/{id}', [SidebarTwoController::class, 'edit'])->name('sidebars.edit');
    Route::post('/update/{id}', [SidebarTwoController::class, 'update'])->name('sidebars.update');
    Route::get('/delete/{id}', [SidebarTwoController::class, 'destroy'])->name('sidebars.delete');
});

Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'create'])->name('home.create');
    Route::post('/add', [HomeController::class, 'store'])->name('home.add');
    Route::get('/index', [HomeController::class, 'index'])->name('home.index');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('/update/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::get('/delete/{id}', [HomeController::class, 'destroy'])->name('home.delete');
});


Route::group(['prefix' => 'about'], function () {
    Route::get('/', [AboutController::class, 'create'])->name('about.create');
    Route::post('/add', [AboutController::class, 'store'])->name('about.add');
    Route::get('/index', [AboutController::class, 'index'])->name('about.index');
    Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::get('/delete/{id}', [AboutController::class, 'destroy'])->name('about.delete');
});


Route::group(['prefix' => 'experience'], function () {
    Route::get('/', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/add', [ExperienceController::class, 'store'])->name('experience.add');
    Route::get('/index', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('/delete/{id}', [ExperienceController::class, 'destroy'])->name('experience.delete');
});


Route::group(['prefix' => 'service'], function () {
    Route::get('/', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/add', [ServiceController::class, 'store'])->name('service.add');
    Route::get('/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
});


