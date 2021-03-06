<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css" />
    <title>Laracasts Video Games</title>
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="/laracasts-logo.svg" class="w-32 flex-none"/>
                </a>

                <ul class="flex ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <label>
                        <input type="text" class="w-64 focus:outline-none focus:shadow-outline text-sm rounded-full px-3 py-1" placeholder="Search..."/>
                    </label>
                    <div class="absolute top-0">

                    </div>
                </div>
                <div class="ml-6">
                    <a href="/">
                        <img src="/avatar.jpg" alt="avatar" class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        Powered by: <a class="underline hover:text-gray-400">IGDB API</a>
    </div>
</footer>
</body>
</html>
