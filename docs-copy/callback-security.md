# Callback Handling & Security

> **Disclaimer:** The security recommendations in this guide are provided as examples and starting points. It is your responsibility to assess, implement, and maintain the security of your own application and infrastructure. The suggestions here are not exhaustive—always review and adapt security measures to your specific use case, compliance requirements, and threat model. Consult with a security professional for production deployments.

## 1. Secure Callback Route
- Use an API route (no CSRF).
- Restrict by IP (Safaricom IPs only).
- Use a shared secret (query param or header, e.g., `?secret=your_shared_secret`).
- Throttle requests per IP/user.
- Log only non-sensitive information (for debugging/troubleshooting).

> These are just a few of many possible security controls. Always stay updated on best practices and monitor your integration for new threats.

## 2. Example Route
```php
Route::post('/mpesa/callback', [MpesaController::class, 'handleCallback']);
```

## 3. Example Controller Logic
```php
public function handleCallback(Request $request)
{
    // Verify IP, secret, and throttle
    if ($request->query('secret') !== env('MPESA_CALLBACK_SECRET')) {
        abort(403, 'Invalid secret');
    }
    // ...
    // Parse and validate callback data
    // Update transaction status in DB
    // Log securely (no sensitive info)
}
```

> See [Status Updates & UX](./status-ux.md) for user feedback logic.
