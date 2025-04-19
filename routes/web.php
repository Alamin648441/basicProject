<?php

use App\Http\Controllers\notepad;
use App\Http\Controllers\notepadController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [notepadController::class, 'index']);
Route::post('/store', [notepadController::class, 'store'])->name('store');
Route::get('/noteView', [notepadController::class, 'show']);
Route::get('edit/{id}', [notepadController::class, 'editData'])->name('edit');
Route::put('update/{id}', [notepadController::class, 'update'])->name('updateData');
Route::delete('deleteNote/{id}', [notepadController::class, 'destroyNote'])->name('deleteNote');

// /*this route for student management 
Route::get('studentHome', [studentController::class,'index']);
Route::post('studentStore', [studentController::class,'createStudent'])->name('studentForm');
Route::get('studentView', [studentController::class,'stView'])->name('studentView');
Route::get('editStudent/{id}', [studentController::class,'editStudent'])->name('editInformation');
Route::put('updateData/{id}', [studentController::class,'updateFunction'])->name('update');
Route::delete('delete/{id}', [studentController::class,'destroyStudent'])->name('delete');


// this route for post control

Route::get('/post', function () {
    return view('postHome');
});