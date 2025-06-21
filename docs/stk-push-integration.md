# 5. STK Push Integration

[⬅️ Previous: 4. M-Pesa API Overview](./mpesa-api-overview.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 6. Callback Handling & Security ➡️](./callback-security.md)

---

## 5.1 Environment Variables
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

## 5.2 Initiate STK Push
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

> **Tip:** Always validate user input and handle errors gracefully. Never expose sensitive credentials in logs or error messages.

---

## ⭐ Rate & React

If you found this guide helpful:

- [Star this repository on GitHub](https://github.com/johnekiru/mpesa-laravel-guide)
- [Join the discussion and leave your feedback!](https://github.com/johnekiru/mpesa-laravel-guide/discussions)
- React with 👍 or ❤️ to let others know it’s useful!

Your feedback helps improve this resource for everyone.

---

Need help or want to support this project? [Buy me a coffee](https://coff.ee/johnekiru7v) or email 📧 johnewoi72@gmail.com

[⬅️ Previous: 4. M-Pesa API Overview](./mpesa-api-overview.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 6. Callback Handling & Security ➡️](./callback-security.md)
