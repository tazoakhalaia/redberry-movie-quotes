<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $quote->movie->name }}</title>
</head>
<body>
<img class="ml-40 w-1/6" src="{{ asset('images/' . $quote->img) }}">
<h1>{{ $quote->movie->name }}</h1>
<h1>{{ $quote->title }}</h1>
</body>
</html>
