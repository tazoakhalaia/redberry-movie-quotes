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
<body>
<form action="/quotes-update/{{ $quotes->id }}" method="POST">
    @csrf
    @method('put')
    <label for="small-input" class="block mb-2 text-lg font-medium text-emerald-400 dark:text-white">Update</label>
    <x-editinput value="{{ $quotes->title }}"/>
    <x-editinput value="{{ $quotes->name }}" />
<x-button type="submit" buttonName="Update" />
</form>
</body>
</html>
