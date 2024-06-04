<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aplikasi Perhitungan Gaji</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        @if(session('error'))
        <div>
            <b>Error! </b>{{session('error')}}
        </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit">Log In</button>
        <hr>
        <p>Belum punya akun? Ayo <a href="/register">Register</a> </p>
        </form>
    </div>
</body>
</html>