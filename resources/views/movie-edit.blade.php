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
<body class="min-h-screen flex justify-center items-center bg-gradient-to-r from-white via-slate-400 to-sky-100">
    <div>
<div class="mt-2 mb-4 flex">
        <a href="{{ route('movies.edit', ['movie' => $movie->id, 'lang' => 'en']) }}"><img class="w-10" src="{{ asset('images/english.png') }}"></a>
        <a href="{{ route('movies.edit', ['movie' => $movie->id, 'lang' => 'ka']) }}"><img class="w-8 ml-2" src="{{ asset('images/georgia.jpg') }}"></a>
    </div>
<form action ="{{ route('movies.update', ['movie' => $movie->id]) }}"method="POST">
    @csrf
    @method('put')
<input class="border border-gray-500 outline-none rounded-md w-50 p-2 bg-transparent text-black" name="name_en" type="text" value="{{ json_decode($movie->name, true)['en']}}">
<input class="border border-gray-500 outline-none rounded-md w-50 p-2 bg-transparent text-black" name="name_ka" type="text" value="{{ json_decode($movie->name, true)['ka']}}">
    <x-button type="submit" class="bg-green-500 mt-4 border-none" buttonName="{{ trans('movie-edit.update') }}" />
</form>
    </div>
</body>
</html>
