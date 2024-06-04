<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Aplikasi Perhitungan Gaji</title>
</head>
<body>
    <h1>Register</h1>
    @if(session('message'))
    <div>
        {{session('message')}}
    </div>
    @endif
    <form action="{{ route('actionregister') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required="">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
    </div>
    <div class="form-group">
        <label>Role</label>
        <input type="text" name="role" class="form-control" placeholder="admin/user" required="">
    </div>
    <button type="submit">Register</button>
    <hr>
    <p>Sudah punya akun? Ayo <a href="/">Login</a></p>
    </form>
    
</body>
</html>