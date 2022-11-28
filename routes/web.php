<?php

use App\Http\Controllers\Admin\BookingManagementController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OccasionController;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\FilterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});
Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [HomeConroller::class, 'index']);

    //Admin Routes
    Route::resource('experiences', ExperienceController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('occasions', OccasionController::class);
    Route::resource('events', EventController::class);

    // User Routes
    Route::get('experience/{id}', [FilterController::class, 'experience_show'])->name('filter.experience');
    Route::get('category/{id}', [FilterController::class, 'category_show'])->name('filter.category');
    Route::get('occasion/{id}', [FilterController::class, 'occasion_show'])->name('filter.occasion');
    Route::get('search', [FilterController::class, 'search'])->name('filter.search');
    Route::resource('messages', MessageController::class);
    Route::resource('bookings', BookingController::class);
    Route::post('bookings/update/{id}', [BookingManagementController::class, 'confirmBooking'])->name('booking.confirm');

    Route::get('/occasionsview', function(){
        return view('user.occasions.index');
    })->name('occasionsview');
});







