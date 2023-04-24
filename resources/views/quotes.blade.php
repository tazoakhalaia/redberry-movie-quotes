<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
<div class="flex">
    <a href="{{ route('quotes', ['lang' => 'ka']) }}" class="border rounded-md bg-blue-500"><button>{{ trans("profile.ka") }}</button></a>
    <a href="{{ route('quotes', ['lang' => 'en']) }}" class="border rounded-md ml-2.5 bg-red-700"><button>{{ trans("profile.en") }}</button></a>
</div>
<form action="{{ route('quotes-create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
        <label for="title_en">{{ trans('profile.quote') }}</label>
    <x-form-inputs name="title_en" type="text" placeholder="Title" />
        <label for="title_ka">{{ trans('profile.quote_ka') }}</label>
        <x-form-inputs name="title_ka" type="text" placeholder="Title_ka" />
        <label for="img">{{ trans('profile.image') }}</label>
    <x-form-inputs name="img" type="file" placeholder="image" />
        <label for="movie_id">{{ trans('profile.choose_movie') }}</label>
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
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="{{ trans('profile.create') }}" />
</form>
<!-- movie name -->
<form action="/movie" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
        <label for="name">{{ trans('profile.movie_name') }}</label>
        <x-form-inputs name="name" type="text" placeholder="Name" label="MovieName" />
    </div>
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="{{ trans('profile.create_movie_name') }}" />
</form>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <x-button class="bg-gray-600" type="submit" buttonName="{{ trans('profile.logout') }}" />
</form>

@foreach($quote as $quotes)
    <div class="border rounded-md p-2.5 mt-4 flex justify-between">
    <div class="flex w-2/3 items-center">
        <h1 class="font-bold"><span class="text-red-600">{{ trans('profile.movie_name') }} - </span> {{ $quotes->movie->name }}</h1>
        <h1 class="ml-7 font-bold"><span class="text-red-600">{{ trans('profile.quote') }}:</span> {{ json_decode($quotes->title_en, true)[app()->getLocale()]}}</h1>
        <img class="ml-40 w-1/6" src="{{ asset('images/' . $quotes->img) }}" alt="pic">

    </div>
    <div class="flex items-center">
        <form action="/quotes/{{ $quotes->id }}" method="POST">
            @csrf
            @method('DELETE')
            <x-button class="bg-red-700" buttonName="DELETE" />
        </form>
        <a href="/quotes-edit/{{ $quotes->id }}"><x-button class="bg-orange-600" buttonName="Quote EDIT" /></a>
        <a href="/movie-edit/{{ $quotes->movie->id }}"><x-button class="bg-orange-600" buttonName="Movie EDIT" /></a>

    </div>
    </div>
@endforeach
</body>
</html>