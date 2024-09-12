<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div class="px-20">
        <nav class="flex justify-between items-center">
            <div>
                <a href="">
                    <img width="50px"  src="{{Vite::asset('resources/images/laravel.png')}}" alt="" srcset="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
            <a href="">Job</a>
            <a href="">company</a>
            <a href="">salary</a></div>
            @auth
             <div><a href="/jobs/create">Post New Job</a></div>
            @endauth
            @guest
            <div class="space-x-6 font-bold">

            <a href="/register">Register</a>
            <a href="/login">Login</a></div>
            @endguest
        </nav>
        <main class="mt-10">{{$slot}}</main>
    </div>

</body>
</html>
