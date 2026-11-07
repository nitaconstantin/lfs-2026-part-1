@props([
    'title' => 'Laracasts',
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body data-theme="dracula" class="min-h-screen">
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
    </nav> --}}
    <x-navbar />
    <main class="max-w-3xl mx-auto mt-6 ">
        {{ $slot }}
    </main>
</body>

</html>
