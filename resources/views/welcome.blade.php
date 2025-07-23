<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-g">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitter</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-900 text-white">
        <nav class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center">
                <svg class="h-8 w-8 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.39.106-.803.163-1.227.163-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.32 4.507 2.098 7.14 2.098 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>
                </svg>
                <a href="#" class="text-white font-bold text-lg">Twitter</a>
            </div>
            <div class="flex items-center">
                <a href="#" class="text-gray-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                <a href="#" class="text-gray-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Help</a>
                <a href="#" class="text-gray-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log in</a>
            </div>
        </nav>

        <main class="flex flex-col items-center justify-center h-screen">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Happening now</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">Join Twitter today.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </main>

        <footer class="bg-gray-800">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">About</a>
                    <a href="#" class="text-gray-400 hover:text-white">Help Center</a>
                    <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white">Ads info</a>
                    <a href="#" class="text-gray-400 hover:text-white">Blog</a>
                    <a href="#" class="text-gray-400 hover:text-white">Status</a>
                    <a href="#" class="text-gray-400 hover:text-white">Careers</a>
                    <a href="#" class="text-gray-400 hover:text-white">Brand Resources</a>
                    <a href="#" class="text-gray-400 hover:text-white">Advertising</a>
                    <a href="#" class="text-gray-400 hover:text-white">Marketing</a>
                </div>
                <div class="mt-8">
                    <p class="text-center text-base text-gray-400">&copy; 2023 Twitter, Inc.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
