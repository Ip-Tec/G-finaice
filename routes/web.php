<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IDCardController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/submitLoan', [ContactController::class, 'submitLoan'])->name('contact.submitLoan');

Route::get('/services', function () {
    return view('services');
})->name("services");

Route::get('/loan', function () {
    return view('loan');
})->name("loan");

Route::get('id-cards/{filename}', [IDCardController::class, 'show'])->name('id-cards.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
