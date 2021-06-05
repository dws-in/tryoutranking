<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Submit a Support Request ') }}
    </h2>
    <p style="font-size: small;">Fill out the form below and TryoutRanking support will get back to you within 24 hours.</p>
  </x-slot>

  <div class="py-12">
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

        <form method="POST" action="{{ route('support.store') }}">

          <div class="form-group">
            <span class="font-medium">Your email</span>
            <input name="email" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: "example@email.com"'></input>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Tell us what's happenning</span>
            <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: "Brief description of your issue."'></textarea>
            @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
          </div>

          <div class="form-group pt-3 float-right">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
