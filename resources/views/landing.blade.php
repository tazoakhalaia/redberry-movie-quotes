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
        <img src="{{ asset('images/patrick.png') }}" alt="Patrick Image">
        <h1>{{ $quotes[0]->title }}</h1>
        <h1>{{ $quotes[0]->name }}</h1>
    </div>
</div>
</body>
</html>
