<x-layout>
    <x-slot:title>
        Home
    </x-slot>
    <!-- Hero Section -->
    <section class="bg-black text-white py-20">
        <div class="container mx-auto text-center">
            <!-- Hero icon Film -->
            <div class="w-24 h-24 bg-white rounded-full mx-auto flex items-center justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-16 h-16 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0 1 18 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0 1 18 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 0 1 6 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                </svg>
            </div>
            <h1 class="text-5xl font-extrabold mb-6">Welcome to {{ config('app.name') }}</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Discover the best movies, your favorite actors, and more! Dive
                into the world of cinema.</p>
            <a href="https://github.com/NereaPinol33/LaravelTinkering"
                class="inline-block bg-white text-black px-6 py-3 rounded-lg text-lg font-medium hover:bg-gray-200 transition duration-300">
                View Github Repository
            </a>
        </div>
    </section>
    <!-- Featured Movies Section -->
    <section id="featured" class="py-16">
        <div class="container mx-auto overflow-hidden">
            <h2 class="text-4xl font-bold text-center mb-10 text-black">Featured Movies</h2>
            <!-- Swiper Carousel -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($movies as $movie)
                        <div class="swiper-slide">
                            <a href="{{ route('movies.show', $movie->id) }}">
                                <img src="{{ $movie->image }}" alt="{{ $movie->title }} Image"
                                    class="block mx-auto rounded-lg">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Actors Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold text-center mb-12 text-black">Meet the Stars</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-12">
                @foreach ($actors as $actor)
                    <div class="bg-white p-6 rounded-lg">
                        <img src="{{ $actor->image }}" alt="{{ $actor->name }} Image"
                            class="w-full h-60 object-cover rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-center text-black mb-4">{{ $actor->name }}</h3>
                        <p class="text-gray-700 text-sm text-center">{{ Str::limit($actor->biography, 80) }}</p>
                        <div class="text-center mt-6">
                            <a href="{{ route('actors.show', $actor->id) }}"
                                class="inline-block bg-black text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-gray-900 transition duration-300">
                                View Actor
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Swiper JS Setup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true, // Optional: Infinite loop
                autoplay: {
                    delay: 2000,
                },
                slidesPerView: 4, // Each slide takes the full width of the container
                spaceBetween: 5, // Optional: Space between slides
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        centeredSlides: true,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                },
            });
        });
    </script>
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</x-layout>
