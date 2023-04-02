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
<body class="min-h-screen flex justify-center items-center">
<div>
    <form action="" method="POST">
        <input class="shadow appearance-none
        border border-sky-500
        rounded w-full py-2 px-3
        text-gray-700
        mb-3 leading-tight
        focus:outline-none focus:shadow-outline"
               type="email"
               placeholder="Email">
        <input class="shadow appearance-none
        border border-sky-500 rounded w-full
        py-2 px-3 text-gray-700 mb-3 leading-tight
        focus:outline-none
        focus:shadow-outline" type="password" placeholder="Password">
        <button class="bg-sky-700
        text-white font-bold py-2 px-4 border
        rounded uppercase">
            Login
        </button>
    </form>
</div>
</body>
</html>
