<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;  //外部にあるThreadControllerクラスを使えるようにした

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

Route::get('/threads', [ThreadController::class, 'index']);

Route::get('/threads/create', [ThreadController::class, 'create']);

Route::post('/threads', [ThreadController::class, 'store']);

Route::get('/threads/{thread}', [ThreadController::class ,'show']);
// '/threads/{対象データのID}'にGetリクエストが来たら、ThreadControllerのshowメソッドを実行する

Route::get('/threads', [ThreadController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
