<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Name</title>
</head>
<body>
<form action ="/movies/{{ $movies->id }}" method="POST">
    @csrf
    @method('put')
<input class="block w-1/4
p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
dark:border-gray-600 dark:placeholder-gray-400
dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" type="text" value="{{ $movies->name }}">
    <x-button type="submit" buttonName="Update" />
</form>
</body>
</html>
