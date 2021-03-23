<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <!-- Name -->
                        @foreach(config('app.available_locales') as $locale)
                        <div class="mt-4">
                            <label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>

                            <input type="text" name="title_{{ $locale }}" id="title_{{ $locale }}"
                                   value="{{ old('title_' . $locale) }}"
                                   class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="full_text_{{ $locale }}">Full Text ({{ strtoupper($locale) }})</label>

                            <textarea name="full_text_{{ $locale }}" id="full_text_e{{ $locale }}" rows="5"
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('full_text_' . $locale) }}</textarea>
                        </div>
                        @endforeach

                        <div class="flex items-center mt-4">
                            <x-button>
                                {{ __('Save Post') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
