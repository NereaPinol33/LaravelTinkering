<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - {{ $title ?? 'Welcome' }}</title>
    <link rel="icon" href="/favicon.jpg" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <!-- Header Section -->
    <x-header />
    <!-- Main Content Section -->
    <main class="container mx-auto py-16 px-8 flex-grow">
        {{ $slot }}
    </main>
    <!-- Footer Section -->
    <x-footer />
</body>

</html>
