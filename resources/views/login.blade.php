<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Page</title>
</head>
<body class="min-h-screen flex justify-center items-center">
<div>
    @if (session('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ session('error') }}</div>
    @endif
    <form method="post" action="{{ route('login') }}">
        @csrf
        <label for="password">{{ trans("profile.emailLabel") }}</label>
        <x-form-inputs type="email" name="email" placeholder="Email"  />
        <label for="password">{{ trans("profile.passwordLabel") }}</label>
        <x-form-inputs type="password" name="password" placeholder="Password" />
        <button class="bg-sky-700
        text-white font-bold text-sm py-2 px-4 border
        rounded uppercase" type="submit">Login</button>
    </form>
</div>
</body>
</html>
