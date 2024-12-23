<x-layout>
    <x-slot:title>
        Edit Actor: {{ $actor->name }}
    </x-slot>
    <!-- Edit Actor Form Section -->
    <section class="bg-white p-6 rounded-lg shadow-md mb-8">
        <div class="container mx-auto">
            <div class="flex items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-800 text-center">Edit Actor: {{ $actor->name }}</h2>
            </div>
            <!-- Form to Edit Actor -->
            <form action="{{ route('actors.update', $actor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Actor Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $actor->name) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Actor Birth Date -->
                <div class="mb-4">
                    <label for="birth_date" class="block text-sm font-medium text-gray-700">Birth Date</label>
                    <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date', $actor->birth_date) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('birth_date') border-red-500 @enderror"
                        required>
                    @error('birth_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Actor Biography -->
                <div class="mb-4">
                    <label for="biography" class="block text-sm font-medium text-gray-700">Biography</label>
                    <textarea id="biography" name="biography" rows="3"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('biography') border-red-500 @enderror"
                        required>{{ old('biography', $actor->biography) }}</textarea>
                    @error('biography')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Actor Gender -->
                <div class="mb-4">
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('gender') border-red-500 @enderror"
                        required>
                        <option value="1" {{ old('gender', $actor->gender) == 1 ? 'selected' : '' }}>Male</option>
                        <option value="2" {{ old('gender', $actor->gender) == 2 ? 'selected' : '' }}>Female</option>
                        <option value="3" {{ old('gender', $actor->gender) == 3 ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Actor Image -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="text" id="image" name="image" value="{{ old('image', $actor->image) }}"
                        class="w-full p-3 mt-1 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror"
                        required>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <a href="{{ route('actors.index') }}"
                        class="inline-block bg-black text-white px-6 py-2 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        Back to Actor List
                    </a>
                    <button type="submit"
                        class="inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-medium hover:bg-gray-900 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                          </svg>
                          
                        Update Actor
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
