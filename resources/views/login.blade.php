<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="min-h-screen flex justify-center items-center">
<div>
    <div class="flex">
        <a href="{{ route('login', ['lang' => 'ka']) }}"><img class="w-8" src="{{ asset('images/georgia.jpg') }}"></a>
        <a href="{{ route('login', ['lang' => 'en']) }}" class="ml-3"><img class="w-10" src="{{ asset('images/english.png') }}"></a>
    </div>
    @if (session('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ session('error') }}</div>
    @endif
    <form method="post" action="{{ route('signup') }}">
        @csrf
        <label for="email">{{ trans("profile.email_label") }}</label>
        <x-form-inputs type="email" name="email" placeholder="Email" />
        <label for="password">{{ trans("profile.password_label") }}</label>
        <x-form-inputs type="password" name="password" placeholder="Password" />
        <button class="bg-sky-700
        text-white font-bold text-sm py-2 px-4 border
        rounded uppercase" type="submit">{{ trans("profile.login") }}</button>
    </form>
</div>
</body>
</html>
