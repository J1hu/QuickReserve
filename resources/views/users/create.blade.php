<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-6 bg-gray-100">
    <form action="{{ route('storeUser') }}" method="POST" class="max-w-xl p-8 mx-auto bg-white rounded-lg shadow-md">
        @csrf
        <h2 class="mb-6 text-2xl font-semibold text-gray-800">Create User</h2>

        <x-input-field type='text' id="name" label="Name" name="name" placeholder="Your name"
            required="true" :error="$errors->first('name')" />

        <x-input-field type='email' id="email" label="Email" name="email" placeholder="Ex. john@gmail.com"
            required="true" :error="$errors->first('email')" />

        <x-select-field id="role" label="Role" name="role" :options="['client' => 'client', 'provider' => 'provider']" required="true"
            :error="$errors->first('role')" />

        <x-input-field type='password' id="password" label="Password" name="password" placeholder="Your password"
            required="true" :error="$errors->first('password')" />

        <div class="flex justify-center">
            <button type="submit"
                class="w-full py-3 font-semibold text-white rounded-md bg-neutral-900 hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900">
                Create user
            </button>
        </div>
    </form>

    {{-- Optional back button --}}
    {{-- <form action="{{ route('showAllUsers') }}" method="GET">
        <button type="submit" class="px-4 py-2 mt-4 font-bold text-white bg-gray-500 rounded hover:bg-gray-700 focus:outline-none focus:shadow-outline">
            Back to Users
        </button>
    </form> --}}
</body>

</html>
