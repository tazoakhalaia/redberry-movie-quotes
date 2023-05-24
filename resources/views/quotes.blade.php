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
<body class="bg-gradient-to-r from-gray-100 via-neutral-200 to-gray-400">
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
    <a href="{{ route('quotes.index', ['lang' => 'ka']) }}" class="border rounded-md bg-blue-500"><button>{{ trans("profile.ka") }}</button></a>
    <a href="{{ route('quotes.index', ['lang' => 'en']) }}" class="border rounded-md ml-2.5 bg-red-700"><button>{{ trans("profile.en") }}</button></a>
</div>
<form action="{{ route('quotes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
        <label for="title_en">{{ trans('profile.quote') }}</label>
    <x-form-inputs name="title_en" type="text" placeholder="Title_en" />
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
                <option value="{{ $movie->id }} ">{{ json_decode($movie->name, true)[app()->getLocale()]}} </option>
            @endforeach
        </select>
    </div>
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="{{ trans('profile.create') }}" />
</form>
<!-- movie name -->
<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-1/4">
        <label for="name">{{ trans('profile.movie_name') }}</label>
        <x-form-inputs name="name" type="text" placeholder="Name" label="MovieName" />
        <label for="name">Movie Name in georgian</label>
        <x-form-inputs name="name_ka" type="text" placeholder="Name" label="MovieName" />
    </div>
    <x-button class="bg-green-700 mb-5" type="submit" buttonName="{{ trans('profile.create_movie_name') }}" />
</form>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <x-button class="bg-gray-600" type="submit" buttonName="{{ trans('profile.logout') }}" />
</form>

@foreach($quote as $quotes)
    <div class="border border-gray-600 rounded-md p-2.5 mt-4 flex justify-between mb-4">
    <div class="flex w-2/3 items-center">
        <h1 class="font-bold"><span class="text-red-600">{{ trans('profile.movie_name') }} - </span> {{ json_decode($quotes->movie->name, true)[app()->getLocale()]}}</h1>
        <h1 class="ml-7 font-bold"><span class="text-red-600">{{ trans('profile.quote') }}:</span> {{ json_decode($quotes->title_en, true)[app()->getLocale()]}}</h1>
        <img class="ml-40 w-1/6" src="{{ asset('images/' . $quotes->img) }}" alt="pic">

    </div>
    <div class="flex items-center">
        <form action="{{ route('quotes.delete', ['quote' => $quotes->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-button class="bg-red-700 ml-4 border-none mr-2" buttonName="{{ trans('admin-page.delete') }}" />
        </form>
        <a href="{{ route('quotes.edit', ['quote' => $quotes->id]) }}"><x-button class="bg-orange-600 border-none mr-2" buttonName="{{ trans('admin-page.quote_edit') }}" /></a>
        <a href="{{ route('movies.edit', ['movie' => $quotes->movie->id]) }}"><x-button class="bg-orange-600 border-none" buttonName="{{ trans('admin-page.movie_edit') }}" /></a>

    </div>
    </div>
@endforeach
</body>
</html>
