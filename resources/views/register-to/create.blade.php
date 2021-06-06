<x-app-layout>
  <x-slot name="header">
    <h1 class="font-semibold text-gray-800 leading-tight" style="font-size: xx-large;">
      {{ __('Daftar TryOut') }}
    </h1>
    <p style="font-size: small;">Ayo daftar tryout nya gan</p>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

       <form action="{{ route('register-to.store') }}" method="post">
            {{ csrf_field() }}

        <div class="form-group">
            <span class="font-medium">Name</span>
            <input name="user_name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('user_name') }}">
            @if ($errors->has('user_name'))
            <span class="text-danger">{{ $errors->first('user_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">School Name</span>
            <input name="school_name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('school_name') }}">
            @if ($errors->has('school_name'))
            <span class="text-danger">{{ $errors->first('school_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">Graduation Date</span>
            <input name="graduation_date" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('graduation_date') }}">
            @if ($errors->has('graduation_date'))
            <span class="text-danger">{{ $errors->first('graduation_date') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">Phone Number</span>
            <input name="phone_number" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('phone_number') }}">
            @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>
         <div class="form-group pt-3 float-right">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
