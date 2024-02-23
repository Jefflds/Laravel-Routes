<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div>
                <a href="/" class="text-blue-200 hover:text-white mx-2">Home</a>
                <a href="/aboutUs" class="text-blue-200 hover:text-white mx-2">About Us</a>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-4 mt-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Contact Us Page</h1>
        <div class="text-gray-700">
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam illum veniam nihil officiis, tenetur illo earum rerum est iste reprehenderit incidunt perferendis quam quidem aspernatur optio ab labore dicta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, modi voluptatum. Deleniti aspernatur minima voluptatum reiciendis animi corporis labore, eaque libero eius, laboriosam repellendus laborum totam fugit veniam quas explicabo!</p>
        </div>
    </div>
</body>

</html>