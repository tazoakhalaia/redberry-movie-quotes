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
<form action="/quotes-create" method="POST" enctype="multipart/form-data">
    @csrf
    <x-form-inputs name="title" type="text" placeholder="Title" label="Title" />
    <x-form-inputs name="name" type="text" placeholder="Name" label="Name" />
    <x-form-inputs name="img" type="file" placeholder="image" label="Image" />
    <x-button type="submit" buttonName="Create" />
</form>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <x-button type="submit" buttonName="Logout" />
</form>

@foreach($quote as $quotes)
    <div class="border rounded-md p-2.5 mt-4 flex justify-between">
    <div class="flex w-2/3 items-center">
        <h1 class="font-bold"><span class="text-red-600">Movie Name: </span> {{ $quotes->name }}</h1>
        <h1 class="ml-7 font-bold"><span class="text-red-600">Movie Title:</span> {{ $quotes->title }}</h1>
        <span class="ml-7 font-bold">Movie Image: <img class="ml-40 w-1/2" src="{{ asset('images/' . $quotes->img) }}"></span>

    </div>
    <div class="flex">
        <a href="/quotes-delete/{{ $quotes->id }}"><x-button  buttonName="DELETE" /></a>
        <a href="/quotes-edit/{{ $quotes->id }}"><x-button buttonName="EDIT" /></a>
    </div>
    </div>
@endforeach
</body>
</html>
