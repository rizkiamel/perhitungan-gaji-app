<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Aplikasi Perhitungan Gaji</title>
</head>
<body>
    <h1>Home</h1>
    <p>Selamat datang <b>{{Auth::user()->nama}}</b>, Anda login sebagai <b>{{Auth::user()->role}}</b>.</p>
    <p><a href="actionlogout">Logout</a></p>
</body>
</html>