
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

Route::prefix('staff')->group(function () {
    // Route Index
    Route::get('/', [StaffController::class, 'index'])->name('staff.index');
    // Route Show
    Route::get('/details/{id}', [StaffController::class, 'show'])->name('staff.show');
    // Create view
    Route::get('/create', [StaffController::class, 'create'])->name('staff.create');
    // Store data from create view
    Route::post('/post', [StaffController::class, 'store'])->name('staff.store');
    // Update view
    Route::get('/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');   
    // Update data from update view
    Route::post('/{id}/update', [StaffController::class, 'update'])->name('staff.update');
    // Deleted Data 
    Route::get('/{id}/delete', [StaffController::class, 'destroy'])->name('staff.delete');
});