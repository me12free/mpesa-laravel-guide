// Example: Initiate STK Push (Controller Method)
public function initiateStkPush(Request $request)
{
    $request->validate([
        'phone' => 'required',
        'amount' => 'required|numeric|min:1',
    ]);

    $accessToken = $this->getMpesaAccessToken();
    $payload = [
        'BusinessShortCode' => config('mpesa.shortcode'),
        'Password' => $this->generatePassword(),
        'Timestamp' => now()->format('YmdHis'),
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $request->amount,
        'PartyA' => $request->phone,
        'PartyB' => config('mpesa.shortcode'),
        'PhoneNumber' => $request->phone,
        'CallBackURL' => config('mpesa.callback_url'),
        'AccountReference' => 'Order123',
        'TransactionDesc' => 'Payment for Order 123',
    ];

    $response = Http::withToken($accessToken)
        ->post(config('mpesa.stk_push_url'), $payload);

    // Handle response and store checkout ID
    // ...
}

// Helper methods for access token and password generation should be included in your service class.
