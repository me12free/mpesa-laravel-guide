<?php
// File: app/Http/Controllers/MpesaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MpesaController extends Controller
{
    // Initiate STK Push (Sandbox Example)
    public function initiateStkPush(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'amount' => 'required|numeric|min:1',
        ]);

        // Sandbox credentials (set in .env)
        $shortcode = env('MPESA_SHORTCODE');
        $passkey = env('MPESA_PASSKEY');
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_CONSUMER_SECRET');
        $callbackUrl = env('MPESA_CALLBACK_URL');
        $timestamp = now()->format('YmdHis');
        $password = base64_encode($shortcode . $passkey . $timestamp);

        // Get access token
        $tokenResponse = Http::withBasicAuth($consumerKey, $consumerSecret)
            ->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        $accessToken = $tokenResponse['access_token'];

        // Prepare STK Push payload
        $payload = [
            'BusinessShortCode' => $shortcode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'PartyA' => $request->phone,
            'PartyB' => $shortcode,
            'PhoneNumber' => $request->phone,
            'CallBackURL' => $callbackUrl,
            'AccountReference' => 'TestPayment',
            'TransactionDesc' => 'Sandbox Test Payment',
        ];

        // Send STK Push request
        $response = Http::withToken($accessToken)
            ->post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest', $payload);

        // Log for debugging (do not log sensitive info in production)
        Log::info('STK Push initiated', ['response' => $response->json()]);

        // Show result to user
        return back()->with('status', 'STK Push initiated. Check your phone to complete payment.');
    }

    // Handle M-Pesa Callback (Sandbox Example)
    public function handleCallback(Request $request)
    {
        // Log callback for debugging
        Log::info('M-Pesa Callback', ['data' => $request->all()]);

        // TODO: Update payment status in your database as needed
        // Only store what is necessary for your use case

        return response()->json(['result' => 'success']);
    }
}

// ---
// To go live:
// - Change all sandbox URLs to production URLs (see Safaricom docs)
// - Use your production credentials in .env
// - Ensure your callback URL is HTTPS and publicly accessible
// - Review all security recommendations in the guide
// - Remove or restrict all debug logging in production
