<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Register Tryout
    </h2>
</x-slot>
{{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form action="{{ route('register-to.store', $tryout->id) }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <span class="font-medium">Name</span>
                        <input name="user_name"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            value="{{ old('user_name') }}">
                        @if ($errors->has('user_name'))
                        <span class="text-danger">{{ $errors->first('user_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="font-medium">School Name</span>
                        <input name="school_name"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            value="{{ old('school_name') }}">
                        @if ($errors->has('school_name'))
                        <span class="text-danger">{{ $errors->first('school_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="font-medium">Graduation Date</span>
                        <input name="graduation_date"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            value="{{ old('graduation_date') }}">
                        @if ($errors->has('graduation_date'))
                        <span class="text-danger">{{ $errors->first('graduation_date') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="font-medium">Phone Number</span>
                        <input name="phone_number"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            value="{{ old('phone_number') }}">
                        @if ($errors->has('phone_number'))
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                        @endif
                    </div>
                    <div class="form-group pt-3 float-right">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="w-full">
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('register-to.store', $tryout->id) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="user_name" class="block mb-2 font-bold text-gray-600">Name</label>
                    <input type="text" id="user_name" name="user_name" placeholder="name"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="school_name" class="block mb-2 font-bold text-gray-600">School Name</label>
                    <input type="text" id="school_name" name="school_name" placeholder="school name"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="graduation_date" class="block mb-2 font-bold text-gray-600">Graduation Year</label>
                    <input type="text" id="graduation_date" name="graduation_date" placeholder="graduation year"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="phone_number" class="block mb-2 font-bold text-gray-600">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="phone number"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
