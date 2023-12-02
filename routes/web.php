<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SideBarController;
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



Route::get('/sidebar', [SideBarController::class,'create'])->name('sidebar.create');
Route::post('/sidebar/add', [SideBarController::class,'store'])->name('sidebar.add');
Route::get('/sidebar/index', [SideBarController::class,'index'])->name('sidebar.index');
Route::get('/sidebar/edit/{id}', [SideBarController::class,'edit'])->name('sidebar.edit');
Route::post('/sidebar/update/{id}', [SideBarController::class,'update'])->name('sidebar.update');