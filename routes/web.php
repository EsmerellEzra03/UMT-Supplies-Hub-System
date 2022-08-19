<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/condition/index', [App\Http\Controllers\ConditionController::class, 'index'])->name('condition:index');

Route::get('/condition/create', [App\Http\Controllers\ConditionController::class, 'create'])->name('condition:create');

Route::post('/condition/store', [App\Http\Controllers\ConditionController::class, 'store'])->name('condition:store');

Route::get('/condition/show/{condition}', [App\Http\Controllers\ConditionController::class, 'show'])->name('condition:show');

Route::post('/condition/edit/{condition}', [App\Http\Controllers\ConditionController::class, 'edit'])->name('condition:edit');

Route::get('/condition/destroy/{condition}', [App\Http\Controllers\ConditionController::class, 'destroy'])->name('condition:destroy');

// Item Route
Route::get('/item/index', [App\Http\Controllers\ItemController::class, 'index'])->name('item:index');

Route::get('/item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('item:create');

Route::post('/item/store', [App\Http\Controllers\ItemController::class, 'store'])->name('item:store');

Route::get('/item/show/{item}', [App\Http\Controllers\ItemController::class, 'show'])->name('item:show');

Route::post('/item/edit/{item}', [App\Http\Controllers\ItemController::class, 'edit'])->name('item:edit');

Route::get('/item/destroy/{item}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('item:destroy');


require __DIR__.'/auth.php';
