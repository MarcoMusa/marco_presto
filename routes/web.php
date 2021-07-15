<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;




Route::get('/', [PublicController::class, 'home'])->name('homepage');

// ROTTE ANNUNCI
Route::get('announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');


// FORM DI CREAZIONE ANNUNCIO
Route::post('announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');

Route::get('/category/{name}/{id}/announcements', [PublicController::class, 'announcementsByCategory'])->name('announcements.category');


// ROTTA-MULTILINGUA
Route::post('locale/{locale}', [PublicController::class, 'locale'])->name('locale');


// ROTTE REVISORE
Route::get('/homerevisor', [RevisorController::class, 'indexRevisor'])->name('homerevisor');
// ROTTA POST ACCETTAZIONE ANNUNCIO
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.accept');
// ROTTA POST RIGETTO ANNUNCIO
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class, 'reject'])->name('revisor.reject');
