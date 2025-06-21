# 7. Status Updates & UX

- Poll transaction status on the frontend (AJAX or polling).
- Show clear messages: pending, success, failed, cancelled.
- Update UI in real-time for best user experience.

> **Note:** This section focuses only on the payment status polling logic. You are responsible for implementing frontend UX and access control as appropriate for your application.

## 7.1 Example (JS polling)

```js
document.addEventListener('DOMContentLoaded', function() {
    // Poll status endpoint every 5 seconds
    setInterval(function() {
        fetch('/api/payment-status?id=123')
            .then(res => res.json())
            .then(data => {
                // Update modal/message based on status
            });
    }, 5000);
});
```

> See [6. Callback Handling & Security](./callback-security.md) for backend security logic.

## ⭐ Rate & React

If you found this guide helpful:

- [Star this repository on GitHub](https://github.com/johnekiru/mpesa-laravel-guide)
- [Join the discussion and leave your feedback!](https://github.com/me12free/mpesa-laravel-guide/discussions)
- React with 👍 or ❤️ to let others know it’s useful!

Your feedback helps improve this resource for everyone.

[⬅️ Previous: 6. Callback Handling & Security](./callback-security.md) | [Table of Contents](../README.md#table-of-contents) | [Next: 8. Payment Tracking & Reporting ➡️](./admin-reporting.md)
