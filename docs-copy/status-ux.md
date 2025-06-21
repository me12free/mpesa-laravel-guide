# Status Updates & Polling

- Poll transaction status on the frontend (AJAX or polling).
- Show clear messages: pending, success, failed, cancelled.
- Update UI in real-time for best user experience.

> **Note:** This section focuses only on the payment status polling logic. You are responsible for implementing frontend UX and access control as appropriate for your application.

## Example (JS polling)
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

> See [Callback Handling & Security](./callback-security.md) for backend security logic.
