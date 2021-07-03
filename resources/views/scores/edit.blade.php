<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit Score') }}
    </h2>
  </x-slot>
  <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('scores.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('scores.update', $score->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="register_id" class="block font-medium text-sm text-gray-700">Register ID</label>
                            <input type="text" name="register_id" id="register_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('register_id', $score->register_id) }}" />
                            @error('register_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indonesia" class="block font-medium text-sm text-gray-700">Indonesia</label>
                            <input type="text" name="indonesia" id="indonesia" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('indonesia', $score->indonesia) }}" />
                            @error('indonesia')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="english" class="block font-medium text-sm text-gray-700">English</label>
                            <input type="text" name="english" id="english" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('english', $score->english) }}" />
                            @error('english')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mathematic" class="block font-medium text-sm text-gray-700">Mathematic</label>
                            <input type="text" name="mathematic" id="mathematic" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mathematic', $score->mathematic) }}" />
                            @error('mathematic')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="physic" class="block font-medium text-sm text-gray-700">Physic</label>
                            <input type="physic" name="physic" id="physic" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('physic', $score->physic) }}" />
                            @error('physic')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="biology" class="block font-medium text-sm text-gray-700">Biology</label>
                            <input type="biology" name="biology" id="biology" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('biology', $score->biology) }}" />
                            @error('biology')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="chemistry" class="block font-medium text-sm text-gray-700">Chemistry</label>
                            <input type="chemistry" name="chemistry" id="chemistry" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('chemistry', $score->chemistry) }}" />
                            @error('chemistry')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="geography" class="block font-medium text-sm text-gray-700">Geography</label>
                            <input type="geography" name="geography" id="geography" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('geography', $score->geography) }}" />
                            @error('geography')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="economy" class="block font-medium text-sm text-gray-700">Economy</label>
                            <input type="economy" name="economy" id="economy" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  value="{{ old('economy', $score->economy) }}" />
                            @error('economy')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="history" class="block font-medium text-sm text-gray-700">History</label>
                            <input type="history" name="history" id="history" class="form-input rounded-md shadow-sm mt-1 block w-full" 
                                  value="{{ old('history', $score->history) }}" />
                            @error('history')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="sociology" class="block font-medium text-sm text-gray-700">History</label>
                            <input type="sociology" name="sociology" id="sociology" class="form-input rounded-md shadow-sm mt-1 block w-full" 
                                  value="{{ old('sociology', $score->sociology) }}" />
                            @error('sociology')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
