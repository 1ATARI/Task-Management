<?php

use App\Http\Controllers\ProController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

//Route::get('/ttt', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/dashboard' ,[\App\Http\Controllers\WelcomeController::class , 'index'])->name('dashboard');
    Route::resource('task' , \App\Http\Controllers\TaskController::class);
    Route::put('updatevalue' , [\App\Http\Controllers\TaskController::class , 'updatevalue'])->name('updatevalue');

    Route::get('/about' ,function (){
       return view('dashboard.about-us');
    })->name('about');

});



require __DIR__.'/auth.php';

