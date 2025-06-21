# 3. Project Setup

1. **Create a new Laravel project:**

   ```bash
   composer create-project laravel/laravel mpesa-demo
   ```

2. **Set up environment variables:**
   - Configure your `.env` with database and M-Pesa credentials. Use `APP_ENV=sandbox` for testing and `APP_ENV=production` for live.
   - Set a shared secret for your callback URL (e.g., `MPESA_CALLBACK_SECRET`) and include it as a query parameter in your callback URL registration (e.g., `...?secret=your_shared_secret`).

3. **Install required packages:**
   - For HTTP requests: `guzzlehttp/guzzle` (Laravel includes this by default).

4. **Set up routes, controllers, and models as described in later sections.**

5. **Webhook/Callback URL:**
   - Ensure your callback URL (webhook) is accessible from the internet (use Ngrok for local testing).
   - Double-check the URL registered with Safaricom matches your endpoint exactly, including the secret.
   - Use logs to verify if callbacks are being received.

> **Warning:** If you experience issues with callbacks or authentication, verify your webhook URL, check your server logs, and confirm your Safaricom API credentials are correct. If problems persist, contact Safaricom API support to ensure your credentials are active and your app is whitelisted.

> See [5. STK Push Integration](./stk-push-integration.md) for detailed code samples.

## ⭐ Rate & React

If you found this guide helpful:

- [Star this repository on GitHub](https://github.com/johnekiru/mpesa-laravel-guide)
- [Join the discussion and leave your feedback!](https://github.com/me12free/mpesa-laravel-guide/discussions)
- React with 👍 or ❤️ to let others know it’s useful!

Your feedback helps improve this resource for everyone.

[⬅️ Previous: 2. Prerequisites](./prerequisites.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 4. M-Pesa API Overview ➡️](./mpesa-api-overview.md)
