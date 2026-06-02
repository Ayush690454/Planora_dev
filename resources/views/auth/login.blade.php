<!DOCTYPE html>
<html>
<head>
    <title>Planora Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>

    <button type="submit">
        Login
    </button>

</form>

</body>
</html>