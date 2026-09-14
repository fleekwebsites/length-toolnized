<?php

use App\Http\Controllers\LengthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// --- SYSTEM UTILS ---
Route::get('/clear-cache/{secret}', function($secret) {
    $your_secret = '85c749007239f3e0597a77dd09459e44';
    if ($secret !== $your_secret) abort(403, 'Unauthorized action.');
    
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache cleared!";
});

Route::get('', [LengthController::class, 'index'])->name('length.index');

Route::post('', [LengthController::class, 'calculate'])->name('length.calculate');

Route::get('/how-to-convert-{from}-to-{to}', [LengthController::class, 'guide'])
    ->where([
        'from' => '[a-z\-]+',
        'to' => '[a-z\-]+'
    ])
    ->name('length.guide');

Route::get('/{from}/{to}/{amount?}', [LengthController::class, 'show'])->name('length.show');

Route::get('/search', function (Illuminate\Http\Request $request) {
    $query = $request->query('q');
    return view('search', compact('query'));
})->name('search');