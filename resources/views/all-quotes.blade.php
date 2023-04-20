<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Page</title>
</head>
<body class="bg-gray-600">
<div class="flex">
    <a href="{{ route('movies', ['movie' => $movie->id, 'lang' => 'ka']) }}" class="border rounded-md bg-blue-500"><button>{{ trans("profile.ka") }}</button></a>
    <a href="{{ route('movies', ['movie' => $movie->id, 'lang' => 'en']) }}" class="border rounded-md ml-2.5 bg-red-700"><button>{{ trans("profile.en") }}</button></a>
</div>
<div class="m-auto  w-1/2">
<h1> {{ trans('profile.quotesFor') }} {{ $movie->name }}</h1>
<ul>
    @foreach ($movie->quote as $quote)
        <li>
            <img class="w-1/6" src="{{ asset('images/' . $quote->img) }}">
            <h2 class="bg-amber-50 mt-1.5">{{ json_decode($quote->title, true)[app()->getLocale()]}}</h2>
        </li>
    @endforeach
</ul>
</div>

</body>
</html>
