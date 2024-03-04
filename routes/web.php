<?php

    use App\Http\Controllers\FrontendController;
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
    return redirect('/home');
});

// Front End
    Route::get('/home', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/teams', [FrontendController::class, 'team'])->name('team');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::post('/contact', [FrontendController::class, 'contact_store'])->name('contact.store');
    Route::get('/completed_jobs', [FrontendController::class, 'completed_jobs'])->name('completed_jobs');
    Route::get('/completed_job/{slug}', [FrontendController::class, 'completed_job'])->name('completed_job');
    Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/service/{slug}', [FrontendController::class, 'service'])->name('service');
    Route::get('/reservation', [FrontendController::class, 'reservation'])->name('reservation');
    Route::post('/reservation', [FrontendController::class, 'reservation_store'])->name('reservation.store');
