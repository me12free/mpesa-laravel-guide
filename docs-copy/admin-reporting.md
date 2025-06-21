# Payment Tracking & Reporting

- Log M-Pesa reference, receipt, and status for each payment as needed for your business logic.
- Log all actions securely (no sensitive payer info). Logs are for debugging and troubleshooting only—do not store sensitive information unnecessarily.

> **Disclaimer:** This section is focused on backend logic for payment tracking and reporting related to STK Push only. All other system security and admin access are your responsibility. Only store data that is necessary for your use case and ensure compliance with all relevant data protection laws.

## Example: Migration
```php
Schema::create('donations', function (Blueprint $table) {
    $table->id();
    $table->string('mpesa_checkout_id')->nullable();
    $table->string('status');
    $table->string('reference')->nullable();
    $table->timestamps();
});
```
