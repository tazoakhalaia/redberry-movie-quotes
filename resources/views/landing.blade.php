<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
</head>
<body class="bg-slate-700 min-h-screen flex">
<div class="w-10 flex justify-center items-center">
    <div class="ml-2">
        <button class="rounded-full text-white border border-slate-100 hover:bg-white hover:text-black">ka</button>
        <button class="rounded-full text-white border border-slate-100 hover:bg-white hover:text-black mt-2">en</button>
    </div>
</div>
<div class="w-full flex justify-center items-center">
    <div>
        <img class="w-1/3 m-auto" src="{{ asset('images/' . $quote->img) }}">
        <h1 class="text-center text-white">{{ $quote->title }}</h1>
        <h1 class="text-center text-white">{{ $quote->movie->name }}</h1>
    </div>
</div>
</body>
</html>
