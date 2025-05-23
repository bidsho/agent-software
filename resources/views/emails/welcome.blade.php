<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include Bootstrap CDN (Optional, works in some email clients) -->
    <style>
        /* Basic email-safe styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            height: 60px;
        }
        .email-content h1 {
            color: #333333;
            margin-bottom: 20px;
        }
        .email-content p {
            color: #555555;
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            color: #aaa;
            font-size: 13px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="email-wrapper">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
    </div>

    <div class="email-content">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>
            Thank you for signing up with us at <strong>{{ config('app.name') }}</strong>.
            We’re thrilled to have you on board! You can now explore all our features and enjoy a great experience.
        </p>

        <p>
            If you have any questions or need help, feel free to reach out to our support team anytime.
        </p>

        <p>
            Best regards,<br>
            <strong>The {{ config('app.name') }} Team</strong>
        </p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>
</div>

</body>
</html>
