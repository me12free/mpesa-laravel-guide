// Example: Secure Callback Handler (Controller Method)
public function handleCallback(Request $request)
{
    // 1. Verify Safaricom IP
    $allowedIps = ['196.201.214.200', '196.201.214.206']; // Update as needed
    if (!in_array($request->ip(), $allowedIps)) {
        abort(403, 'Unauthorized IP');
    }

    // 2. Verify shared secret
    if ($request->query('secret') !== config('mpesa.callback_secret')) {
        abort(403, 'Invalid secret');
    }

    // 3. Throttle per IP/user (see Laravel throttle middleware)

    // 4. Parse and validate callback data
    $data = $request->all();
    // ...validate and update transaction status...

    // 5. Log securely (no sensitive info)
    Log::info('M-Pesa callback received', [
        'checkout_id' => $data['CheckoutRequestID'] ?? null,
        'result_code' => $data['ResultCode'] ?? null,
    ]);

    return response()->json(['result' => 'success']);
}
