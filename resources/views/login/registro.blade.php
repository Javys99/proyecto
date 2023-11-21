<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/login/registro') }} " method="post">
    @csrf
    <label for="username"> Username</label>
    <input type="text" name="username" id=""username>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Paasword</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="password_confirmation">Confirmar Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation">
    <br>
    <input type="submit" value="Registrarse">
</form>
</body>
</html>