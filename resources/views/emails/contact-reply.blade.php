<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reply from Celtic Trekking</title>
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
        <h1>Reply from Celtic Trekking</h1>
    </div>
    <div class="content">
        <p>Hi {{ $contactMessage->full_name }},</p>
        <div class="message-box">
            {!! $emailBody !!}
        </div>
        <p style="margin-top: 20px;">Best regards,<br>Celtic Trekking Team</p>
    </div>
</body>
</html>
