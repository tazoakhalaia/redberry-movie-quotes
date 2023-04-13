<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Page</title>
</head>
<body>
<h1>Quotes for {{ $movie->name }}</h1>
<ul>
    @foreach ($movie->quote as $quote)
        <li>
            <img class="w-1/6" src="{{ asset('images/' . $quote->img) }}">
            <h2>{{ $quote->title }}</h2>
        </li>
    @endforeach
</ul>

</body>
</html>
