<x-layout>
    <x-slot:title>
        Edit Movie: {{ $movie->title }}
    </x-slot>
    <!-- Edit Movie Form Section -->
    <section class="bg-white p-6 rounded-lg shadow-md mb-8">
        <div class="container mx-auto">
            <div class="flex items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-800 text-center">Edit Movie: {{ $movie->title }}</h2>
            </div>
            <!-- Form to Edit Movie -->
            <form action="{{ route('movies.update', $movie->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Movie Title -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $movie->title) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror"
                        required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Movie Description -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="3"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror"
                        required>{{ old('description', $movie->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Movie Director -->
                <div class="mb-4">
                    <label for="director" class="block text-sm font-medium text-gray-700">Director</label>
                    <input type="text" id="director" name="director" value="{{ old('director', $movie->director) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('director') border-red-500 @enderror"
                        required>
                    @error('director')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Movie Year -->
                <div class="mb-4">
                    <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                    <input type="number" id="year" name="year" value="{{ old('year', $movie->year) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('year') border-red-500 @enderror"
                        required>
                    @error('year')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Movie Genre -->
                <div class="mb-4">
                    <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                    <input type="text" id="genre" name="genre" value="{{ old('genre', $movie->genre) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('genre') border-red-500 @enderror"
                        required>
                    @error('genre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Movie Image -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="text" id="image" name="image" value="{{ old('image', $movie->image) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror"
                        required>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Actor Selection -->
                <div class="mb-4">
                    <label for="actors" class="block text-sm font-medium text-gray-700">Select Actors</label>
                    <select name="actors[]" id="actors"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('actors') border-red-500 @enderror"
                        multiple required>
                        @foreach ($actors as $actor)
                            <option value="{{ $actor->id }}"
                                {{ in_array($actor->id, old('actors', $movie->actors->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $actor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('actors')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <a href="{{ route('movies.index') }}"
                        class="inline-block bg-black text-white px-6 py-2 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        Back to Movie List
                    </a>
                    <button type="submit"
                        class="inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                        </svg>
                        Update Movie
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
