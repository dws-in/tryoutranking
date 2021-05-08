<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add Tryout') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

        <form method="POST" action="/tryout">

          <div class="form-group">
            <textarea name="name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='tryout-name'></textarea>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='tryout-description'></textarea>
            @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
          </div>
          <div class="form-group">
            <textarea name="held" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='2021-05-03 16:21:51.000000'></textarea>
            @if ($errors->has('held'))
            <span class="text-danger">{{ $errors->first('held') }}</span>
            @endif
          </div>

          <div class="form-group pt-3 float-right">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
</x-app-layout>