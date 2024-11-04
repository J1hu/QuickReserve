<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-6 bg-gray-100">
    @php
        $headers = ['Name', 'Email', 'Role'];
        $rows = $users->map(function ($user) {
            return [$user->name, $user->email, $user->role];
        });
    @endphp
    <x-table-component title="Users" :headers="$headers" :rows="$rows" />
</body>

</html>
