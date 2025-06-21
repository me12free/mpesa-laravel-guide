// Example: Frontend JS Polling for Payment Status
// Place in your Blade or JS file

document.addEventListener('DOMContentLoaded', function() {
    setInterval(function() {
        fetch('/api/payment-status?id=123')
            .then(res => res.json())
            .then(data => {
                // Update modal/message based on status
                if (data.status === 'success') {
                    // Show success message
                } else if (data.status === 'failed') {
                    // Show failure message
                } else {
                    // Show pending message
                }
            });
    }, 5000);
});
