<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
    <style>
        /* Basic styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1.5s forwards;
        }

        /* Modern minimal fade-up animation */
        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .congratulations-message {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            line-height: 1.5;
        }

        .highlight {
            color: #4CAF50;
            font-weight: 600;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="congratulations-message">
            Congratulations!<br>
            You’ve successfully completed the<br>
            <span class="highlight">Treinetic Internship: DevOps Assignment - Question 02</span>
        </div>
    </div>
</body>
</html>
