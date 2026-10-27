<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;

//1. Routenuntuk menampilkan halaman utama (Blade View)
Route::get('tasks', [TaskController::class, 'indexView']);

//2. Route Khusus untuk AJAX / Fetch API (Mengembalikan Data JSON)
Route::prefix('api')->group(function () {
    Route::get('/tasks',[TaskController::class,'index']);
    Route::post('/tasks',[TaskController::class,'store']);
    Route::get('/tasks{id}',[TaskController::class,'show']);
    Route::put('/tasks',[TaskController::class,'update']);
    Route::delete('/tasks{id}',[TaskController::class,'destroy']);

});

Route::get('/home', [TaskController::class, 'home']);
Route::get('/about', [TaskController::class, 'about']);
Route::get('/contact', [TaskController::class, 'contact']);
Route::get('/dashboard', [TaskController::class, 'dashboard']);
Route::get('/lapor', [TaskController::class,'lapor']);
Route::get('/destinasi', [TaskController::class, 'destinasi']);
Route::get('/index', function () {
    return view('tasks.index');
});
