<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2em;
            color: #fff;
            background-color: #333;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Kalkulator</h1>
        <a href="{{ url('/kalkulator') }}" class="button">Buka Kalkulator</a>
    </div>
</body>
</html>
