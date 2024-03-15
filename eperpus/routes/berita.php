
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::prefix('berita')->group(function () {
    // Route Index
    Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
    // Route Show
    Route::get('/details/{id}', [BeritaController::class, 'show'])->name('berita.show');
    // Create view
    Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
    // Store data from create view
    Route::post('/post', [BeritaController::class, 'store'])->name('berita.store');
    // Update view
    Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');   
    // Update data from update view
    Route::post('/{id}/update', [BeritaController::class, 'update'])->name('berita.update');
    // Deleted Data 
    Route::get('/{id}/delete', [BeritaController::class, 'destroy'])->name('berita.delete');
});