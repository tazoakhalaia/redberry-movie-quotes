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
<form action="/quotes-create" method="POST">
    @csrf
    <x-form-inputs name="title" type="text" placeholder="Title" label="Title" />
    <x-form-inputs name="name" type="text" placeholder="Name" label="Name" />
    <x-button type="submit" buttonName="Create" />
</form>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <x-button type="submit" buttonName="Logout" />
</form>

@foreach($quotes as $quote)
    <div class="border rounded-md p-2.5 mt-4 flex justify-between">
    <div class="flex">
        <h1 class="font-bold"><span class="text-red-600">Movie Name: </span> {{ $quote->name }}</h1>
        <h1 class="ml-7 font-bold"><span class="text-red-600">Movie Title:</span> {{ $quote->title }}</h1>
    </div>
    <div class="flex">
        <a href="/quotes-delete/{{ $quote->id }}"><x-button  buttonName="DELETE" /></a>
        <a href="/quotes-edit/{{ $quote->id }}"><x-button buttonName="EDIT" /></a>
    </div>
    </div>
@endforeach
</body>
</html>
