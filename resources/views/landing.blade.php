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
<body class="bg-slate-700 min-h-screen flex">
<div class="w-28 flex justify-center items-center">
    <div class="ml-2">
        <a href="{{ route('landing', ['lang' => 'ka']) }}"><button class="block rounded-full text-white border border-slate-100 hover:bg-white hover:text-black">{{ trans("profile.ka") }}</button></a>
        <a href="{{ route('landing', ['lang' => 'en']) }}"><button class="rounded-full text-white border border-slate-100 hover:bg-white hover:text-black mt-2">{{ trans("profile.en") }}</button></a>
    </div>
</div>
<div class="w-full flex justify-center items-center">
    <div class="text-center">
        <img class="w-1/3 m-auto" src="{{ asset('images/' . $quote->img) }}">
        <h1 class="text-center text-white">{{ json_decode($quote->title_en, true)[app()->getLocale()]}}</h1>
        <a href="movies/{{ $quote->movie->id }}" class="text-sky-500">{{ $quote->movie->name }}</a>
    </div>
</div>
</body>
</html>
