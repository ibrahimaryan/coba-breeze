<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($film) ? 'Edit' : 'Create' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($film) ? route('film.update', $film->id) : route('film.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @if(isset($film))
                            @method('patch')
                        @endif

                        <div>
                            <x-input-label for="judul" value="judul" />
                            <x-text-input id="judul" name="judul" type="text" class="mt-1 block w-full" :value="$film->judul ?? old('judul')" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
                        </div>

                        <div>
                            <x-input-label for="tahun_rilis" value="tahun_rilis" />
                            <x-text-input id="tahun_rilis" name="tahun_rilis" type="text" class="mt-1 block w-full" :value="$film->tahun_rilis ?? old('tahun_rilis')" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('tahun_rilis')" />
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>