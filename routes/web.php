<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\Auth\RegisteredUserController; // Add this line
use App\Http\Controllers\Auth\AuthenticatedSessionController; // Add this line
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

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
    return view('mainpage');
});

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/addfeedback', function () {
    return view('addfeedback');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
});

// Add import statements for these controllers
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);



Route::get('/ordering', function () {
    return view('ordering');
})->name('ordering');
Route::post('/place-order', [OrderingController::class, 'store'])->name('order.store');
Route::get('/confirmation', function () {
    return view('confirmation');
})->name('order.confirmation');

// Route::get('/ordering', [OrderController::class, 'showOrderingPage']);
// Route::post('/place-order', [OrderController::class, 'placeOrder']);

// Route::get('/ordering', [OrderingController::class, 'index'])->name('ordering');
// Route::get('/ordering', [OrderingController::class, 'index'])->name('order.index');
Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('order.history');
Route::get('/contact',[UserController::class, 'index']);
Route::get('/feedback',[UserController::class, 'user']);
Route::resource('addfeedback', UserController::class);

// Google login
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('auth/facebook', [LoginController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
