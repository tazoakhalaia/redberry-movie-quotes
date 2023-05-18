<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Update Name</title>
</head>
<body class="min-h-screen flex justify-center items-center bg-gradient-to-r from-black via-slate-900 to-sky-700">
<form action ="/movies/{{ $movies->id }}" method="POST">
    @csrf
    @method('put')
<input class="border border-gray-500 outline-none rounded-md w-50 p-2 bg-transparent text-white" name="name" type="text" value="{{ $movies->name }}">
    <x-button type="submit" class="bg-green-500 mt-4 border-none" buttonName="Update" />
</form>
</body>
</html>
