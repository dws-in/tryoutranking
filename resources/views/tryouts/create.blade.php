<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Tryout
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tryouts.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('tryouts.store') }}">
                     {{ csrf_field() }}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', '') }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="held" class="block font-medium text-sm text-gray-700">Held On</label>
                            <input type="date" name="held" id="held" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('held', '') }}" />
                            @error('held')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="due" class="block font-medium text-sm text-gray-700">Due Date</label>
                            <input type="date" name="due" id="due" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('due', '') }}" />
                            @error('due')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="cluster_id" class="block font-medium text-sm text-gray-700">Cluster</label>
                            <div class="col-md-6">
                                <select name="cluster_id" id="cluster_id" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                    <option value="">== Select Cluster ==</option>
                                    @foreach ($clusters as $cluster)
                                        <option value="{{ $cluster->id}}">{{ $cluster->cluster_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">Organizer ID</label>
                            <input type="text" name="user_id" id="user_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('user_id', '') }}" />
                            @error('held')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
