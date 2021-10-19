<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EAR</title>

<body>
    <h1>Login</h1>
    <form action="login" method="post">
        @csrf
        <input name="email" type="email" placeholder="email"></input>
        <input name="password" type="password" placeholder="contraseña"></input>
        <button type="submit">Iniciar sesión</button>
    </form>

</body>

</html>