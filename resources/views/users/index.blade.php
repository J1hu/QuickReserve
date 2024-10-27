<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="text-lg">USER PAGE</div>
</body>
<div class="table">
    @foreach ($users as $user)
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
        <div>Role: {{ $user->role }}</div>
        <hr>
    @endforeach
</div>

</html>
