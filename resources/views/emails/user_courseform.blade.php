<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 30px;
            max-width: 600px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h3 {
            font-size: 28px;
            color: #27607a;
            margin-bottom: 10px;
        }
        .footer p {
            margin: 0;
            font-size: 12px;
            color: #6c757d;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .content p:first-child {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h3>Thank You for Your Registration</h3>
        </div>
        <div class="content">
            <p>Hi {{ $data['name'] }},</p>
            <p>Thank you for registering for the Generative AI Course with us! We have received your submission and will get back to you shortly.</p>
            <p>If you have any questions, please feel free to contact us.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} TMS. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>