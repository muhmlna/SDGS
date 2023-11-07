<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminArchiveController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminGaleryController;
use App\Http\Controllers\Admin\AdminJournalController;
use App\Http\Controllers\Admin\AdminOurteamController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Client\ClientArticleController;
use App\Http\Controllers\Client\ClientArchiveController;
use App\Http\Controllers\Client\ClientEventController;
use App\Http\Controllers\Client\ClientGaleryController;
use App\Http\Controllers\Client\ClientJournalController;
use App\Http\Controllers\Client\ClientOurteamController;
use App\Http\Controllers\Client\ClientProfileController;


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

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/article', [ClientArticleController::class, 'index'])->name('article');
Route::get('/article/{id}', [ClientArticleController::class, 'show'])->name('article-detail');
Route::get('/archive', [ClientArchiveController::class, 'index'])->name('archive');
Route::get('/event', [ClientEventController::class, 'index'])->name('event');
Route::get('/galery', [ClientGaleryController::class, 'index'])->name('galery');
Route::get('/journal', [ClientJournalController::class, 'index'])->name('journal');
Route::get('/ourteam', [ClientOurteamController::class, 'index'])->name('ourteam');
Route::get('/profile', [ClientProfileController::class, 'index'])->name('profile');

Auth::routes();

Route::middleware(['auth'])->group(function () {

  Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
  Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

  // CMS ADMINITRASTOR
  Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('beranda');
      Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
      Route::resource('user', AdminUserController::class);
      Route::resource('category', AdminCategoryController::class);
      Route::resource('article', AdminArticleController::class);
      Route::resource('archive', AdminArchiveController::class);
      Route::resource('event', AdminEventController::class);
      Route::resource('galery', AdminGaleryController::class);
      Route::resource('journal', AdminJournalController::class);
      Route::resource('ourteam', AdminOurteamController::class);
      Route::resource('profile', AdminProfileController::class);
    });
  
});
