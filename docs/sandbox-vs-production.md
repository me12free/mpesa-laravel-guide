# 3. Sandbox vs Production

## 3.1 Sandbox (Testing)

- Use Safaricom sandbox credentials.
- Test with test phone numbers and shortcodes.
- Use Ngrok for local callback testing.
- No real money is moved.
- Use a strong, unique shared secret in your callback URL (e.g., `?secret=your_shared_secret`).
- Store the secret in your `.env` file and never commit it to version control.

> **Note:** The sandbox is for safe testing only. Never use real customer data or production secrets in the sandbox environment.

## 3.2 Production (Live)

- Use live credentials from Safaricom.
- Secure your server (HTTPS, firewall, IP whitelisting).
- Use a strong, unique shared secret in your callback URL and backend verification (never use the same secret as in sandbox).
- Rotate the secret periodically and after any suspected exposure.
- Never expose the secret in logs or error messages.
- Monitor transactions and logs (for debugging only, never log sensitive info).

> **Warning:** Always keep secrets and credentials out of version control. Review all security recommendations in the guide before going live.

## ⭐ Rate & React

If you found this guide helpful:

- [Star this repository on GitHub](https://github.com/johnekiru/mpesa-laravel-guide)
- [Join the discussion and leave your feedback!](https://github.com/me12free/mpesa-laravel-guide/discussions)
- React with 👍 or ❤️ to let others know it’s useful!

Your feedback helps improve this resource for everyone.

[⬅️ Previous: 2. Prerequisites](./prerequisites.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 4. STK Push Integration ➡️](./stk-push-integration.md)
