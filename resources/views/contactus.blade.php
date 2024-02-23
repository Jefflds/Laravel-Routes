<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Contact Us Page</h1>
        <a href="/" class="text-blue-500 hover:underline mr-4">Home</a>
        <a href="/aboutUs" class="text-blue-500 hover:underline">About Us</a>
    </div>
</body>

</html>