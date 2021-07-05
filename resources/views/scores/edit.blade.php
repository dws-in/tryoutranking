<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Score') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form action="{{ route('scores.update', $score->id) }}" method="POST">
                    @method('PUT')
                    <div class="form-group pt-3">
                        <span class="font-medium">Indonesia Score</span>
                        <input name="indonesia"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">English Score</span>
                        <input name="english"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Mathematic Score</span>
                        <input name="mathematic"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Physic Score</span>
                        <input name="physic"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Biology Score</span>
                        <input name="biology"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Chemistry Score</span>
                        <input name="chemistry"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Geography Score</span>
                        <input name="geography"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Economy Score</span>
                        <input name="economy"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">History Score</span>
                        <input name="history"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>
                    <div class="form-group pt-3">
                        <span class="font-medium">Sociology Score</span>
                        <input name="sociology"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Example: 75.25'></input>
                    </div>

                    <div class="form-group pt-3 float-right">
                        <button type="submit" name="update"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div> --}}

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('myTryout.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('scores.update', $score->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indonesia" class="block font-medium text-sm text-gray-700">Indonesia Score</label>
                            <input type="text" name="indonesia" id="indonesia"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('indonesia', $score->indonesia) }}" />
                            @error('indonesia')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="english" class="block font-medium text-sm text-gray-700">English Score</label>
                            <input type="text" name="english" id="english"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('english', $score->english) }}">
                            @error('english')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- @if($score->registerTryout->tryout->cluster_id == 1) --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mathematic" class="block font-medium text-sm text-gray-700">Mathematic Score</label>
                            <input type="text" name="mathematic" id="mathematic"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('mathematic', $score->mathematic) }}" />
                            @error('mathematic')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="physic" class="block font-medium text-sm text-gray-700">Physics Score</label>
                            <input type="text" name="physic" id="physic" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('physic', $score->physic ) }}" />
                            @error('physic')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="biology" class="block font-medium text-sm text-gray-700">Biology Score</label>
                            <input type="text" name="biology" id="biology" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('biology', $score->biology ) }}" />
                            @error('biology')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="chemistry" class="block font-medium text-sm text-gray-700">Chemistry Score</label>
                            <input type="text" name="chemistry" id="chemistry" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('biology', $score->chemistry ) }}" />
                            @error('chemistry')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- @else --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="geography" class="block font-medium text-sm text-gray-700">Geography Score</label>
                            <input type="text" name="geography" id="geography" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('geography', $score->geography ) }}" />
                            @error('geography')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="economy" class="block font-medium text-sm text-gray-700">Economy Score</label>
                            <input type="text" name="economy" id="economy" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('economy', $score->economy ) }}" />
                            @error('economy')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="history" class="block font-medium text-sm text-gray-700">History Score</label>
                            <input type="text" name="history" id="history" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('history', $score->history ) }}" />
                            @error('history')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="sociology" class="block font-medium text-sm text-gray-700">Sociology Score</label>
                            <input type="text" name="sociology" id="sociology" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('sociology', $score->sociology ) }}" />
                            @error('sociology')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- @endif --}}
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
