<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach($articles as $article)
                <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $article->title }}</h2>
                    @if($article->image)
                        <div class="my-4">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg">
                        </div>
                    @endif
                    <p class="mt-2 text-gray-600 dark:text-gray-400">{{ Str::limit($article->body, 150) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="inline-block mt-4 text-indigo-600 dark:text-indigo-400 hover:underline">
                        Read more
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
