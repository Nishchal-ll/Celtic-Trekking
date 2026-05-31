<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2E7D32;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
        }
        .field-value {
            margin-top: 5px;
        }
        .message-box {
            background-color: white;
            padding: 15px;
            border-left: 4px solid #2E7D32;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
    </div>
    <div class="content">
        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">{{ $data['email'] }}</div>
        </div>

        @if(!empty($data['phone']))
        <div class="field">
            <div class="field-label">Phone:</div>
            <div class="field-value">{{ $data['phone'] }}</div>
        </div>
        @endif

        @if(!empty($data['destination']))
        <div class="field">
            <div class="field-label">Interested Destination:</div>
            <div class="field-value">{{ $data['destination'] }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Subject:</div>
            <div class="field-value">{{ $data['subject'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Message:</div>
            <div class="message-box">
                {!! nl2br(e($data['message'])) !!}
            </div>
        </div>
    </div>
</body>
</html>
