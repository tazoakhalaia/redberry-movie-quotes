<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
</head>
<body class="bg-gradient-radial bg-center bg-gray-dark bg-opacity-100 to-gray-dark min-h-screen flex">
<div class="w-28 flex justify-center items-center">
    <div class="ml-2">
        <a href="{{ route('landing', ['lang' => 'en']) }}"><button class="rounded-full w-12 h-18 text-white border border-slate-100 p-2 hover:bg-white hover:text-black text-2xl">en</button></a>
        <a href="{{ route('landing', ['lang' => 'ka']) }}"><button class="block rounded-full w-12 h-18 text-white border p-2 border-slate-100 hover:bg-white hover:text-black mt-2 text-2xl">ka</button></a>
    </div>
</div>
<div class="w-full flex justify-center items-center">
    <div class="text-center mt-40">
        <img class="w-moviePicWidth h-moviePicHeight m-auto rounded-md" src="{{ asset('images/' . $quote->img) }}">
        <h1 class="text-center text-white font-bold text-5xl mt-16 mb-28">"{{ json_decode($quote->title, true)[app()->getLocale()]}}"</h1>
        <a href="{{ route('movies.index', ['movie' => $quote->movie->id]) }}" class="text-white text-5xl underline capitalize">{{ json_decode($quote->movie->name, true)[app()->getLocale()]}}</a>
    </div>
</div>
</body>
</html>
