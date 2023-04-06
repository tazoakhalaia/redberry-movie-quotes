<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Quotes</title>
</head>
<body>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@foreach($quotes as $quote)
    <div class="border rounded-md p-2.5 mt-4 flex justify-between">
    <div class="flex">
    <h1 class="font-bold">Movie Name: {{ $quote->name }}</h1>
    <h1 class="ml-7 font-bold">Movie Title: {{ $quote->title }}</h1>
    </div>
    <div class="flex">
        <a href="/quotes-delete/{{ $quote->id }}"><x-button  buttonName="DELETE" /></a>
        <a href="/quotes-edit/{{ $quote->id }}"><x-button buttonName="EDIT" /></a>
    </div>
    </div>
@endforeach
</body>
</html>
