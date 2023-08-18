<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BookplaceController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\AdminloginController;
use Laravel\Socialite\Facades\Socialite;
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



/*  user auth  */ 
Route::get('studentdashboard',[StudentDashboardController::class,'index'])->middleware(['auth','isStudent']);
/* book place */
Route::get('bookplace',[BookplaceController::class,'book']);
/* login */
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);
/* signup */
Route::get('signup',[SignupController::class,'index']);
Route::post('signup',[SignupController::class,'signup']);
/* logout */
Route::get('logout',[LogoutController::class,'index']);
/*  admin auth  */ 
Route::get('admindashboard',[AdminDashboardController::class,'show'])->Middleware(['auth','isAdmin']);
/* Admin add student */
Route::post('admindashboard', [AdminDashboardController::class,'add']);
/*  admin delete student  */ 
Route::get('deletestudent/{id}', [AdminDashboardController::class, 'deletestudent']);
/*  admin update student  */ 
Route::any('/update/{id}', [AdmindashboardController::class, 'update'])->name('update');
/*  admin add book  */ 
Route::post('admindashboard/addbook', [AdminDashboardController::class,'addbook']);
/*  admin delete book  */ 
Route::get('deletebook/{id}',[AdminDashboardController::class,'deletebook']);
/*  admin update book  */ 
Route::any('/updateBook/{id}', [AdmindashboardController::class, 'updateBook'])->name('bookupdate');
/*  student command book  */
Route::post('/commands', [App\Http\Controllers\BookplaceController::class, 'store'])->name('commands.store');
/*  student delete command  */ 
Route::get('deletecommand/{id}', [StudentDashboardController::class, 'deleteCommand'])->name('deletecommand');
/*  admin decline command  */ 
Route::post('/command/decline', [AdmindashboardController::class, 'declineCommand'])->name('command.decline');
/*  admin accept command  */ 
Route::post('/command/accept', [AdmindashboardController::class, 'acceptCommand'])->name('command.accept');
/*  admin delete approval  */ 
Route::get('deleteapproval/{id}', [AdmindashboardController::class, 'deleteapproval'])->name('deleteapproval');
/*  admin delete approval  */ 
Route::post('/approval/update', [AdmindashboardController::class, 'updateapproval'])->name('updateapproval');


