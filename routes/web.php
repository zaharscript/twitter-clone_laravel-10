<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThoughtController;
use App\Models\Thought;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
});

Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/thought', [ThoughtController::class, 'store'])->name('thought.create');


Route::get('/term', function () {
    return view('twitter.term');
});

Route::get('/support', function () {
    return view('twitter.support');
});

require __DIR__ . '/auth.php';
