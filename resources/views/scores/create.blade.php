<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add Score') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

        <form method="POST" action="/tryout/{{$tryout->id}}/score">

          <div class="form-group">
            <span class="font-medium">User ID</span>
            <input name="user_id" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 215'></input>
            @if ($errors->has('user_id'))
            <span class="text-danger">{{ $errors->first('user_id') }}</span>
            @endif
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Indonesia Score</span>
            <input name="indonesia" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">English Score</span>
            <input name="english" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Mathematic Score</span>
            <input name="mathematic" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Physic Score</span>
            <input name="physic" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Biology Score</span>
            <input name="biology" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Chemistry Score</span>
            <input name="chemistry" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Geography Score</span>
            <input name="geography" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Economy Score</span>
            <input name="economy" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">History Score</span>
            <input name="history" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
          </div>
          <div class="form-group pt-3">
            <span class="font-medium">Sociology Score</span>
            <input name="sociology" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: 75.25'></input>
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
