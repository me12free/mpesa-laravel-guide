# Sandbox vs Production

## Sandbox (Testing)
- Use Safaricom sandbox credentials.
- Test with test phone numbers and shortcodes.
- Use Ngrok for local callback testing.
- No real money is moved.
- Use a strong, unique shared secret in your callback URL (e.g., `?secret=your_shared_secret`).
- Store the secret in your `.env` file and never commit it to version control.

## Production (Live)
- Use live credentials from Safaricom.
- Secure your server (HTTPS, firewall, IP whitelisting).
- Use a strong, unique shared secret in your callback URL and backend verification (never use the same secret as in sandbox).
- Rotate the secret periodically and after any suspected exposure.
- Never expose the secret in logs or error messages.
- Monitor transactions and logs (for debugging only, never log sensitive info).

> Always keep secrets and credentials out of version control. Review all security recommendations in the guide before going live.
