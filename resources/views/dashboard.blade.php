<x-app-layout>
  <x-slot name="header">
    <h1 class="font-semibold text-gray-800 leading-tight" style="font-size: xx-large;">
      {{ __('Browse Tryout') }}
    </h1>
    <p style="font-size: small;">Have you find a tryout that fits in your schedule?</p>

    <div class="w-full pt-3 flex">
      <input name="held" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-7 py-2 px-3 font-small placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: "SIMAK UI"'></input>
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
      <input name="held" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-7 py-2 px-3 font-small placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Example: "2021-12-21 11:22:12.00"'></input>
      @if ($errors->has('held'))
      <span class="text-danger">{{ $errors->first('held') }}</span>
      @endif
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <div class="flex">
          <div class="flex-auto text-2xl mb-4">Tryout List</div>

          <div class="flex-auto text-right mt-2">
            <a href="/tryout" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new Tryout</a>
          </div>
        </div>
        <table class="w-full text-md rounded mb-4">
          <thead>
            <tr class="border-b">
              <th class="text-left p-3 px-5">Name</th>
              <th class="text-left p-3 px-5">Decription</th>
              <th class="text-left p-3 px-5">Held</th>
              <th class="text-left p-3 px-5">Actions</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($tryouts as $tryout)
            <tr class="border-b hover:bg-orange-100">
              <td class="p-3 px-5">
                <a href="/tryout/{{$tryout->id}}/ranking" name="index" class="">{{$tryout->name}}</a>
              </td>
              <td class="p-3 px-5">
                {{$tryout->description}}
              </td>
              <td class="p-3 px-5">
                {{$tryout->held}}
              </td>
              <td class="p-3 px-5">

                <a href="/tryout/{{$tryout->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                <form action="/tryout/{{$tryout->id}}" class="inline-block">
                  <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                  {{ csrf_field() }}
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</x-app-layout>