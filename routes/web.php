<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([ 
        'albums'     => AlbumController::class,
        'photos'     => PhotoController::class,
    ]);

    Route::get('/photos/{photo}/preview', [PhotoController::class, 'showPreview'])
        ->name('photos.preview');
    
    Route::get('/photos/{photo}/original', [PhotoController::class, 'showOriginal'])
        ->name('photos.original');    
});

require __DIR__.'/auth.php';
