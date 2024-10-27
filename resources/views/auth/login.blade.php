<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Login User</h1>
    <form action=" {{ route('login') }}" method="POST">
        @method('POST')
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
    <br>
    <p>don't have account? register <a class="text-blue-500 underline" href="{{ route('showRegisterForm') }}">here</a>
    </p>

</body>

</html>
