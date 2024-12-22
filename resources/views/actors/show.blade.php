<x-layout>
    <x-slot:title>
        {{ $actor->name }}
    </x-slot>

    <!-- Actor Details Section -->
    <section class="bg-black p-10 rounded-lg shadow-xl mb-12">
        <div class="container mx-auto text-white text-center">
            <h2 class="text-5xl font-bold mb-6">{{ $actor->name }}</h2>

            <!-- Actor Name and Image -->
                <img src="{{ $actor->image }}" alt="{{ $actor->name }} Image" class="w-48 mx-auto rounded-lg mb-6">

            <p class="text-xl mb-6 max-w-3xl mx-auto">{{ $actor->biography }}</p>
            <div class="flex justify-center space-x-8 text-lg">
                <span><strong>Birth Date:</strong> {{ $actor->birth_date }}</span>
            </div>
        </div>
    </section>

    <!-- Movies Section -->
    <section class="container mx-auto py-12">
        <h3 class="text-3xl font-medium mb-8 text-black text-center">Movies Featuring {{ $actor->name }}</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($actor->movies as $movie)
                <div
                    class="bg-black p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ $movie->image }}" alt="{{ $movie->title }} Image"
                        class="block mx-auto rounded-lg mb-4">
                    <h4 class="text-xl font-semibold text-white mb-4">{{ $movie->title }}</h4>
                    <p class="text-white text-sm">{{ Str::limit($movie->description, 120) }}</p>
                    <p class="text-white text-sm"><strong>Director:</strong> {{ $movie->director }}</p>
                    <p class="text-white text-sm"><strong>Year:</strong> {{ $movie->year }}</p>
                    <a href="{{ route('movies.show', $movie->id) }}"
                        class="mt-4 inline-block bg-white px-6 py-2 rounded-lg text-lg font-medium hover:bg-gray-100">
                        View Movie
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Back Button -->
    <section class="container mx-auto text-center mb-12">
        <a href="{{ route('actors.index') }}"
            class="inline-block bg-black text-white px-6 py-2 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 inline">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>

            Back to Actor List
        </a>
    </section>
</x-layout>
