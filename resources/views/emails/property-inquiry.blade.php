<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Property Inquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif;">
    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white text-center">
                <img src="{{ asset('images/logo.png') }}" alt="Site Logo" style="height: 50px;">
                <h4 class="mt-2 mb-0">
                    {{ $recipientType === 'user' ? 'New Property Inquiry' : 'Inquiry Confirmation' }}
                </h4>
            </div>
            <div class="card-body">
                <p class="mb-4">
                    <strong>
                        {{ $recipientType === 'user' ? 'Hello, you have received a new property inquiry!' : 'Thank you for your inquiry!' }}
                    </strong>
                </p>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $inquiry->visitor_full_name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $inquiry->visitor_email }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $inquiry->visitor_phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $inquiry->message }}</td>
                        </tr>
                    </tbody>
                </table>

                @if ($recipientType === 'visitor')
                    <p>We appreciate your interest in this property. One of our representatives will get back to you shortly.</p>
                @else
                    <p>Please log in to your dashboard to view and respond to this inquiry.</p>
                @endif

                <hr>
                <p class="text-muted small">This is an automated message. Please do not reply directly to this email.</p>
            </div>
        </div>
    </div>
</body>
</html>
