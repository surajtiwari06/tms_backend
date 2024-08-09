<!DOCTYPE html>
<html>
<head>
    <title>Generative AI Course Registration</title>
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
            max-width: 700px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h2 {
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
        .details th {
            background-color: #27607a;
            color: #ffffff;
            padding: 12px;
        }
        .details td {
            padding: 12px;
            background-color: #f8f9fa;
        }
        .details tr:nth-child(even) td {
            background-color: #e9ecef;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">        
            <h2>Generative AI Course Registration</h2>
        </div>
        <div class="content">
            <p>A registration for the Generative AI Course has been submitted:</p>
            <table class="details table table-bordered">
                <tr><th>Name</th><td>{{ $data['name'] }}</td></tr>
                <tr><th>Gender</th><td>{{ $data['gender'] }}</td></tr>
                <tr><th>Address</th><td>{{ $data['address'] }}</td></tr>
                <tr><th>City</th><td>{{ $data['city'] }}</td></tr>
                <tr><th>State</th><td>{{ $data['state'] }}</td></tr>
                <tr><th>Email</th><td>{{ $data['email'] }}</td></tr>
                <tr><th>Phone</th><td>{{ $data['phone'] }}</td></tr>
                <tr><th>Company</th><td>{{ $data['company'] }}</td></tr>
                <tr><th>Message</th><td>{{ $data['message'] }}</td></tr>
            </table>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} TMS. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>