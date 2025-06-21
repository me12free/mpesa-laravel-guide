# STK Push Integration

## 1. Environment Variables
Add the following to your `.env`:
```
APP_ENV=sandbox
MPESA_CONSUMER_KEY=your_consumer_key
MPESA_CONSUMER_SECRET=your_consumer_secret
MPESA_SHORTCODE=your_shortcode
MPESA_PASSKEY=your_passkey
MPESA_CALLBACK_URL=https://yourdomain.com/api/mpesa/callback?secret=your_shared_secret
MPESA_CALLBACK_SECRET=your_shared_secret
```
- For production, set `APP_ENV=production` and use your live credentials and secret.

## 2. Initiate STK Push
Example controller method:
```php
public function initiateStkPush(Request $request)
{
    // Validate input
    $request->validate([
        'phone' => 'required',
        'amount' => 'required|numeric|min:1',
    ]);

    // Prepare request payload
    $payload = [
        // ...build payload as per Safaricom API...
    ];

    // Send request using Guzzle
    $response = Http::withToken($accessToken)
        ->post($stkPushUrl, $payload);

    // Handle response
    // ...
}
```

> See [Callback Handling & Security](./callback-security.md) for next steps.
