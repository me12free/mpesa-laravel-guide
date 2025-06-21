# Project Setup

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

> If you experience issues with callbacks or authentication, verify your webhook URL, check your server logs, and confirm your Safaricom API credentials are correct. If problems persist, contact Safaricom API support to ensure your credentials are active and your app is whitelisted.

---

> See [STK Push Integration](./stk-push-integration.md) for detailed code samples.

---

## Support & Buy Me a Coffee

If you found this guide helpful or need further guidance, feel free to reach out for support or to say thanks:

- **Contact:** your.email@example.com
- **Buy Me a Coffee:** [https://www.buymeacoffee.com/yourusername](https://www.buymeacoffee.com/yourusername)
