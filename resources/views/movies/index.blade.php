<x-layout title="Movies List">
    <div class="flex justify-between items-center mb-6">
        <!-- Page Title -->
        <h1 class="text-4xl font-semibold text-gray-800">Movies List</h1>

        <!-- Add Movie Button -->
        <a href="{{ route('movies.create') }}"
            class="inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="inline w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Movie
        </a>
    </div>

    <!-- Flash Message -->
    @if (session('success'))
        <div class="bg-green-600 text-white p-4 mb-6 rounded-lg flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="inline w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Movies Table -->
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead class="bg-black text-white">
                <tr>
                    <th class="py-4 px-6 text-left border-b">ID</th>
                    <th class="py-4 px-6 text-left border-b">Title</th>
                    <th class="py-4 px-6 text-left border-b">Description</th>
                    <th class="py-4 px-6 text-left border-b">Year</th>
                    <th class="py-4 px-6 text-left border-b">Genre</th>
                    <th class="py-4 px-6 text-left border-b">Director</th>
                    <th class="py-4 px-6 text-center border-b"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6 border-b">{{ $movie->id }}</td>
                        <td class="py-3 px-6 border-b">{{ $movie->title }}</td>
                        <td class="py-3 px-6 border-b truncate max-w-xs">{{ $movie->description }}</td>
                        <td class="py-3 px-6 border-b">{{ $movie->year }}</td>
                        <td class="py-3 px-6 border-b">{{ $movie->genre }}</td>
                        <td class="py-3 px-6 border-b">{{ $movie->director }}</td>
                        <td class="py-3 px-6 border-b text-center">
                            <!-- Show -->
                            <a href="{{ route('movies.show', $movie->id) }}"
                                class="bg-black text-white hover:bg-gray-900 hover:text-white transition duration-300 p-2 rounded-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="inline w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                            <!-- Edit -->
                            <a href="{{ route('movies.edit', $movie->id) }}"
                                class="bg-black text-white hover:bg-gray-900 hover:text-white transition duration-300 p-2 rounded-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <!-- Delete -->
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST"
                                class="inline-block" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-black text-white hover:bg-gray-900 hover:text-white transition duration-300 p-2 rounded-full inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="inline w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                @if ($movies->isEmpty())
                    <tr>
                        <td colspan="7" class="py-4 px-6 text-center">No movies found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
