<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Tryout List
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            @can('tryouts_access')
            <div class="row">
                <div class="block mb-8">
                    <a href="{{ route('tryouts.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Tryout</a>
                </div>
                @endcan
        </div>
        @livewire('search')
    </div>
</x-app-layout>
