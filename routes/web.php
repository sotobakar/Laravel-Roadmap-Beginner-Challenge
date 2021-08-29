<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebsiteController::class, 'homepage'])->name('website.homepage');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/article/{article}', [WebsiteController::class, 'article'])->name('website.article');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('/categories', AdminCategoryController::class)->except(['show']);
    Route::resource('/tags', AdminTagController::class)->except(['show']);
    Route::resource('/articles', AdminArticleController::class)->except(['show']);
});



require __DIR__ . '/auth.php';
