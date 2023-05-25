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
<body class="bg-gradient-radial bg-center bg-gray-dark bg-opacity-100 to-gray-dark flex">
<div class="w-28 flex min-h-screen justify-center items-center">
    <div class="ml-2">
        <a href="{{ route('movies.index', ['movie' => $movie->id, 'lang' => 'en']) }}"><button class="rounded-full w-12 h-18 text-2xl text-white border border-slate-100 p-2 hover:bg-white hover:text-black">en</button></a>
        <a href="{{ route('movies.index', ['movie' => $movie->id, 'lang' => 'ka'])}}"><button class="block rounded-full w-12 h-18  text-2xl text-white border p-2 border-slate-100 hover:bg-white hover:text-black mt-2">ka</button></a>
    </div>
</div>
<div class="m-auto mt-10">
<h1 class="text-white text-5xl mt-20 capitalize">{{ json_decode($movie->name, true)[app()->getLocale()]}}</h1>
<div> 
    @foreach ($quotes as $quote)
        <div class="w-allMoviePicWidth bg-white rounded-lg h-allQuotesBoxHeight mt-20 overflow-hidden mb-6">
            <img class="w-allMoviePicWidth border border-black  h-allMoviePicheight" src="{{ asset('images/' . $quote->img) }}">
            <h2 class="mt-8 text-4xl ml-2">"{{ json_decode($quote->title_en, true)[app()->getLocale()]}}"</h2>
        </div>
    @endforeach
</div>
</div>

</body>
</html>
