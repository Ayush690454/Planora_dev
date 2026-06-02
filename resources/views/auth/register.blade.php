<!DOCTYPE html>
<html>
<head>
    <title>Planora Register</title>
</head>
<body>

<h1>Register</h1>

<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>

    <div>
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation">
    </div>

    <button type="submit">
        Register
    </button>

</form>

</body>
</html>