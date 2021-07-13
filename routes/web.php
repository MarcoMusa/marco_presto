<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [PublicController::class, 'home'])->name('homepage');

// ROTTE ANNUNCI
Route::get('announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');

// FORM DI CREAZIONE ANNUNCIO
Route::post('announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');

Route::get('/category/{name}/{id}/announcements', [PublicController::class, 'announcementsByCategory'])->name('public.announcements.category');
