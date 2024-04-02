<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResearchController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('research/create', [ResearchController::class, 'create'])->name('research.create');
    Route::patch('research/{research}', [ResearchController::class, 'update'])->name('research.update');
    Route::get('/research/{research}/edit', [ResearchController::class, 'edit'])->name('research.edit');
    Route::get('/research/{research}/destroy', [ResearchController::class, 'destroy'])->name('research.destroy');

    Route::get('research', [ResearchController::class, 'index'])->name('research.index');
    Route::post('research', [ResearchController::class, 'store'])->name('research.store');


    

});

require __DIR__.'/auth.php';
