# 8. Payment Tracking & Reporting (2FA & Security)

> **Disclaimer:** This section is focused on backend logic for payment tracking and reporting related to STK Push only. All other system security and admin access are your responsibility. Only store data that is necessary for your use case and ensure compliance with all relevant data protection laws.

## 8.1 Example: Migration

```php
Schema::create('donations', function (Blueprint $table) {
    $table->id();
    $table->string('mpesa_checkout_id')->nullable();
    $table->string('status');
    $table->string('reference')->nullable();
    $table->timestamps();
});
```

- Log M-Pesa reference, receipt, and status for each payment as needed for your business logic.
- Log all actions securely (no sensitive payer info). Logs are for debugging and troubleshooting only—do not store sensitive information unnecessarily.

> **Tip:** For advanced security, consider implementing two-factor authentication (2FA) for admin access and sensitive actions.

## ⭐ Rate & React

If you found this guide helpful:

- [Star this repository on GitHub](https://github.com/johnekiru/mpesa-laravel-guide)
- [Join the discussion and leave your feedback!](https://github.com/me12free/mpesa-laravel-guide/discussions)
- React with 👍 or ❤️ to let others know it’s useful!

Your feedback helps improve this resource for everyone.

[⬅️ Previous: 7. Admin & Reporting](./admin-reporting.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 9. Troubleshooting ➡️](./troubleshooting.md)
