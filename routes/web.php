<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThoughtController;
use App\Http\Controllers\CommentController;
use App\Models\Thought;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view( 'welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// twitter-clone route
Route::get('/', [DashboardController::class, 'index'])->name('twitter.index');

Route::get('/thoughts/{thought}', [ThoughtController::class, 'show'])->name('thoughts.show');

Route::post('/thoughts', [ThoughtController::class, 'store'])->name('thought.create');

Route::get('/thoughts/{thought}/edit', [ThoughtController::class, 'edit'])->name('thoughts.edit');

Route::put('/thoughts/{thought}', [ThoughtController::class, 'update'])->name('thoughts.update');

Route::delete('/thoughts/{thought}', [ThoughtController::class, 'destroy'])->name('thoughts.destroy');

Route::post('/thoughts/{thought}/comments', [CommentController::class, 'store'])->name('thoughts.comments.store');



//step to create comment features
// model ✔
// controller
// migration ✔
// setup the route




Route::get('/term', function () {
    return view('twitter.term');
});

Route::get('/support', function () {
    return view('twitter.support');
});

require __DIR__ . '/auth.php';
