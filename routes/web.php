<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PilotAdminController;
use App\Http\Controllers\Admin\WelcomeNoteAdminController;
use App\Http\Controllers\Admin\SupportAdminController;





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

// Route::get('/', function () {
//     return view('hello');
// });

//Auth::routes();
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminLoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('/', [AdminController::class,'index'])->name('adminDashboard');
    Route::resource('pilot', PilotAdminController::class);
    Route::get('/logout',[AdminLoginController::class,'logout'])->name('logout');
    Route::resource('welcome_notes', WelcomeNoteAdminController::class);
    Route::resource('support', SupportAdminController::class);


    Route::get('support/delete/{ticket_id}', [SupportAdminController::class,'delete'])->name('admin.support.delete');

    Route::get('welcome_notes/delete/{note_id}', [WelcomeNoteAdminController::class,'delete'])->name('admin.welcome_notes.delete');
});



