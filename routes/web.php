<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsaController;
use App\Http\Controllers\PromotionController;

// Define a route group with a prefix
Route::prefix('admin/ecommerce/smsa')->group(function () {
    Route::get('/', [SmsaController::class, 'index'])->name('smsa.index');
    Route::get('/getData', [SmsaController::class, 'getData'])->name('smsa.data');
    Route::get('/edit/{id}', [SmsaController::class, 'edit'])->name('smsa.edit');
    Route::post('/bulkEdit', [SmsaController::class, 'bulkEdit'])->name('smsa.bulk-edit');
    Route::post('/submit', [SmsaController::class, 'submit'])->name('smsa.submit');
    Route::post('/bulkSubmit', [SmsaController::class, 'bulkSubmit'])->name('smsa.bulk-submit');
    Route::post('/bulkPrint', [SmsaController::class, 'bulkPrint'])->name('smsa.bulk-print');
    Route::get('/track/{awb}', [SmsaController::class, 'track'])->name('smsa.track');

    Route::get('promotions', [PromotionController::class, 'index'])->name('promotions.index');
Route::get('promotions/create', [PromotionController::class, 'create'])->name('promotions.create');
Route::get('promotions/data', [PromotionController::class, 'data'])->name('promotions.data');
Route::post('promotions', [PromotionController::class, 'store'])->name('promotions.store');
Route::get('promotions/{promotion}/edit', [PromotionController::class, 'edit'])->name('promotions.edit');
Route::put('promotions/{promotion}', [PromotionController::class, 'update'])->name('promotions.update');
Route::delete('/promotions/bulk-delete', [PromotionController::class, 'bulkDelete'])->name('promotions.bulkDelete');
Route::delete('promotions/{promotion}', [PromotionController::class, 'destroy'])->name('promotions.destroy');
});
