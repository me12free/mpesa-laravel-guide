<!-- File: resources/views/donate.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate (M-Pesa STK Push Sandbox Example)</title>
</head>
<body>
    <h1>Donate via M-Pesa</h1>
    @if(session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif
    <form method="POST" action="/donate">
        @csrf
        <label>Phone Number:</label>
        <input type="text" name="phone" required placeholder="2547XXXXXXXX"><br>
        <label>Amount:</label>
        <input type="number" name="amount" min="1" required><br>
        <button type="submit">Donate</button>
    </form>
</body>
</html>
