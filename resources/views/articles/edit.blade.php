<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required
                           class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>

                <!-- Body Field -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                    <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Body</label>
                    <textarea name="body" id="body" rows="5" required
                              class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">{{ old('body', $article->body) }}</textarea>
                </div>

                <!-- Current Image -->
                @if($article->image)
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Current Image</label>
                        <img src="{{ asset('storage/' . $article->image) }}" alt="Image" class="max-w-xs h-auto rounded-md">
                    </div>
                @endif

                <!-- Upload New Image -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Upload New Image</label>
                    <input type="file" name="image" class="mt-1 block w-full text-sm text-gray-900 dark:text-gray-300 dark:bg-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 dark:file:bg-indigo-600 dark:file:text-indigo-200 dark:hover:file:bg-indigo-700" id="image">
                </div>

                <!-- Submit Button -->
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Update Article') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
