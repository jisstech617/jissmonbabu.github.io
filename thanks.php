<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f9f2;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .thank-you-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .thank-you-box {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        .thank-you-box h1 {
            color: #28a745;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .thank-you-box p {
            font-size: 1.1rem;
            color: #555;
        }

        .back-btn {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="thank-you-container">
    <div class="thank-you-box">
        <h1>✅ Message Sent Successfully!</h1>
        <p>Thank you for contacting us. We’ll get back to you shortly.</p>
        <a href="index.php" class="btn btn-success back-btn">Back to Home</a>
    </div>
</div>

</body>
</html>
