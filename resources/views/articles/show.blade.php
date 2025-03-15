<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">{{ $article->title }}</h1>
                @if($article->image)
                    <div class="my-4">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                @endif
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $article->body }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
