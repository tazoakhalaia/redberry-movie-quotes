<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<body class="bg-gradient-to-r from-gray-200 via-blue-100 to-blue-300">
<div class="mt-2 mb-4">
        <a href="{{ route('quote.edit', ['quote' => $quote->id, 'lang' => 'en']) }}"><button class="ml-4 border border-red-500 rounded-md">{{ trans("profile.en") }}</button></a>
        <a href="{{ route('quote.edit', ['quote' => $quote->id, 'lang' => 'ka']) }}"><button class="ml-4 border border-blue-500 rounded-md">{{ trans("profile.ka") }}</button></a>
    </div>
<form action ="/quotes/{{ $quote->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <h1 class="block mb-2 text-lg font-medium text-blue-700 dark:text-white">{{ trans('quote-edit.quote_edit') }}</h1>
    <label for="title_en" class="mt-2">{{ trans('quote-edit.quote_in_english') }}</label>
    <input class="block w-1/4
p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
dark:border-gray-600 dark:placeholder-gray-400
dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" name="title_en" type="text" value="{{ json_decode($quote->title_en, true)['en'] }}">
<label for="title_ka">{{ trans('quote-edit.quote_in_georgian') }}</label>
<input class="block w-1/4
p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
dark:border-gray-600 dark:placeholder-gray-400
dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="title_ka" type="text" value="{{ json_decode($quote->title_en, true)['ka'] }}">
    <input class="mt-4" type="file" name="img">
    <img class="w-1/6 mt-4" src="{{ asset('images/' . $quote->img) }}" alt="Quote Image">
    <x-button class="bg-green-700 mt-4" type="submit" buttonName="{{ trans('quote-edit.update') }}" />
</form>
</body>
</html>
