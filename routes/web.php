<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\SidebarTwoController;
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
