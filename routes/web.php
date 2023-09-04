<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\QuotationController;
use App\Models\Quotation;
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

// Route::get('test', function () {
//     return view('test');
// });
// Route::get('test2', function () {
//     return view('test2');
// });
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('career', [PagesController::class, 'career'])->name('career');
Route::get('maintenance', [PagesController::class, 'maintenance'])->name('maintenance');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('projects', [PagesController::class, 'projects'])->name('projects');
Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('terms', [PagesController::class, 'terms'])->name('terms');
Route::post('contact-form', [PagesController::class, 'contactForm'])->name('contact-form');
Route::resource('quotation', QuotationController::class)->only(['store', 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('email', function () {

//     $quotation =  Quotation::first();

//     // dd($quotation);

//     return view('emails.quotemail', compact('quotation'));
// });
