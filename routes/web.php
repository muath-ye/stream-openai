<?php
use App\Http\Controllers\AskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ask", AskController::class);
