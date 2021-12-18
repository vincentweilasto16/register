<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        Name: <input type="text" name="name" id="">
        <br>
        Email: <input type="email" name="email" id="">
        <br>
        Password: <input type="password" name="password" id="">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>