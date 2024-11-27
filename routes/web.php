<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ParametersController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /* parameter */
    Route::resource("parameter", ParametersController::class);
    Route::post('modifier_parameter', [ParametersController::class, 'editParam'])->name('modifier_parameter');

    /* categories */
    Route::get('categorie', [CategoriesController::class, 'index'])->name('categorie.index');
    Route::get('action_categorie/{id}', [CategoriesController::class, 'action'])->name('action_categorie');
    Route::post('make_action', [CategoriesController::class, 'makeAction'])->name('make_action');
    Route::get('modif_etat_categorie/{id}/{etat}', [CategoriesController::class, 'archive'])->name('modif_etat_categorie');
    Route::get('categories_archive', [CategoriesController::class, 'indexArchiv'])->name('categories_archive');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
