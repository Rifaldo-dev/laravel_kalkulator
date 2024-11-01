<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 3em;
            color: #ff6666;
        }
        p {
            font-size: 1.2em;
        }
        a {
            color: #4285f4;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Yah... sayang sekali disini tidak terdapat apa apa :(</p>
        <a href="{{ url('/') }}">Kembali ke Beranda</a>
    </div>
</body>
</html>
