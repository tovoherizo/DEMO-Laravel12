<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PostController;






Route::resource('jobs', JobController::class);
Route::get('/', function (
    
) {
    return view('index');
})->name('Home');

Route::get('/about', function () {
    return view('About');
})->name('About');
Route::get('/joblist', [JobController::class, 'index'])->name('jobList');




Route::get('/jobdetail/{id}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/category', function () {
    return view('category');
})->name('category');
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::fallback(function () {
    return response()->view('404', [], 404);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profil',function(){ 
    return view('profile.user.profil');
});
Route::get('/listeoffre',[JobController::class,'listeoffre'])->name('listeoffre');
//afficher une offre
Route::get('/offreedit/{id}', [JobController::class, 'edit'])->name('offreedit.view');
// Mettre à jour une offre
Route::patch('/offreedit/{id}', [JobController::class, 'update'])->name('offreedit.update');
//supp offre
Route::delete('/supprimerOffre/{id}', [JobController::class,'destroy'])->name('offre.destroy');
Route::get('/photo',[JobController::class, 'photo'])->name('photo');
Route::get('/message',function(){ 
    return view('chat');
});
Route::get('/ajoutoffre',function(){ 
    return view('AjoutOffre');
});
Route::middleware('auth')->group(function () {
    Route::get('/profileEdit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profilupdate', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profil.show');
    Route::patch('/profile/update-image', [ProfileController::class, 'updateProfileImage'])->name('profile.update-image');
    Route::post('/ajoutoffre' ,[JobController::class,'store'])->name('jobs.store') ;

});
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/listecandidature',[PostController::class, 'show'])->name('Post.view');
Route::post('/jobdetail/{id}',[PostController::class,  'store'])->name('Post.store');



require __DIR__.'/auth.php';
