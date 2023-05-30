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
<div class="mt-2 mb-4 flex">
        <a href="{{ route('quotes.edit', ['quote' => $quote->id, 'lang' => 'ka']) }}"><img class="w-8" src="{{ asset('images/georgia.jpg') }}"></a>
        <a href="{{ route('quotes.edit', ['quote' => $quote->id, 'lang' => 'en']) }}"><img class="w-10 ml-2" src="{{ asset('images/english.png') }}"></a>
    </div>
    <form action ="{{ route('quotes.update', ['quote' => $quote->id]) }}"method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="title_en" class="mt-2">{{ trans('quote-edit.quote_in_english') }}</label>
        <input class="block p-2 rounded-md border border-gray-300 outline-none" name="title_en" type="text" value="{{ json_decode($quote->title, true)['en'] }}">
        <label for="title_ka">{{ trans('quote-edit.quote_in_georgian') }}</label>
        <input class="block p-2 rounded-md border border-gray-300 outline-none" name="title_ka" type="text" value="{{ json_decode($quote->title, true)['ka'] }}">
        <input class="mt-4" type="file" name="img">
        <img class="w-1/6 mt-4" src="{{ asset('images/' . $quote->img) }}" alt="Quote Image">
        <x-button class="bg-green-700 mt-4" type="submit" buttonName="{{ trans('quote-edit.update') }}" />
    </form>
</body>
</html>
