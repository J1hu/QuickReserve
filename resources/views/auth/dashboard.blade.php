<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>WELCOME TO YOUR DASHBOARD {{ $user->name }}!</h1>

    <form action="{{ route('logout') }}" method="POST">
        @method('POST')
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>
