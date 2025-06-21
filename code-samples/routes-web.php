<?php
// File: routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaController;

// Simple donation form (GET)
Route::get('/donate', function () {
    return view('donate');
});

// Handle form submission (POST)
Route::post('/donate', [MpesaController::class, 'initiateStkPush']);

// M-Pesa callback (webhook)
Route::post('/api/mpesa/callback', [MpesaController::class, 'handleCallback']);
