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
    <div class="mb-4 text-lg font-semibold">USER PAGE</div>

    <div class="overflow-x-auto rounded-lg shadow-md">
        <table class="w-full overflow-hidden bg-white border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-4 py-2 font-medium text-left text-gray-600">Name</th>
                    <th class="px-4 py-2 font-medium text-left text-gray-600">Email</th>
                    <th class="px-4 py-2 font-medium text-left text-gray-600">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b last:border-none">
                        <td class="px-4 py-3 font-semibold text-gray-800">{{ $user->name }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $user->email }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>


</html>
