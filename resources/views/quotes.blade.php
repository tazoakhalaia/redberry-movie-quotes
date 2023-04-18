<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Page</title>
</head>
<body>
@if($errors->any())
    <div class="w-1/4">
        <ul>
            @foreach($errors->all() as $error)
                <li class="mt-1.5 bg-red-500 h-full rounded-sm">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('quotes-create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
    <x-form-inputs name="title" type="text" placeholder="Title" label="Title" />
    <x-form-inputs name="img" type="file" placeholder="image" label="Image" />
        <select class="shadow
        border border-sky-500 rounded w-full
        py-2 px-3 text-gray-700 mb-3 leading-tight
        focus:outline-none
        focus:shadow-outline" name="movie_id">
            @foreach($movies as $movie)
                <option value="{{ $movie->id }} ">{{ $movie->name }}</option>
            @endforeach
        </select>
    </div>
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="Create" />
</form>
<!-- movie name -->
<form action="/movie" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
        <x-form-inputs name="name" type="text" placeholder="Name" label="MovieName" />
    </div>
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="Create Movie Name" />
</form>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <x-button class="bg-gray-600" type="submit" buttonName="Logout" />
</form>

@foreach($quote as $quotes)
    <div class="border rounded-md p-2.5 mt-4 flex justify-between">
    <div class="flex w-2/3 items-center">
        <h1 class="font-bold"><span class="text-red-600">Movie Name: </span> {{ $quotes->movie->name }}</h1>
        <h1 class="ml-7 font-bold"><span class="text-red-600">Movie Title:</span> {{ $quotes->title }}</h1>
        <img class="ml-40 w-1/6" src="{{ asset('images/' . $quotes->img) }}" alt="pic">

    </div>
    <div class="flex items-center">
        <a href="/quotes/{{ $quotes->id }}"><x-button class="bg-red-700" buttonName="DELETE" /></a>
        <a href="/quotes-edit/{{ $quotes->id }}"><x-button class="bg-orange-600" buttonName="Quote EDIT" /></a>
        <a href="/movie-edit/{{ $quotes->movie->id }}"><x-button class="bg-orange-600" buttonName="Movie EDIT" /></a>

    </div>
    </div>
@endforeach
</body>
</html>
