<x-app-layout>
  <x-slot name="header">
    <h1 class="font-semibold text-gray-800 leading-tight" style="font-size: xx-large;">
      {{ __('Scores List') }}
    </h1>
    <p style="font-size: small;">How your tryout result?</p>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <div class="flex">
          <div class="flex-auto text-2xl mb-4">{{$tryout->name}}</div>

          <div class="flex-auto text-right mt-2">
            <a href="{{ route('scores.add', ['id' => $tryout->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new Score</a>
            {{-- a href="{{ route('scores.add', $tryout->id) }}"
            a href="/tryout/{{$tryout->id}}/score" --}}
          </div>
        </div>
        <table class="w-full text-md rounded mb-4">
          <thead>
            <tr class="border-b">
              <th class="text-left p-3 px-5">Math</th>
              <th class="text-left p-3 px-5">Indo</th>
              <th class="text-left p-3 px-5">Eng</th>
              <th class="text-left p-3 px-5">Phy</th>
              <th class="text-left p-3 px-5">Bio</th>
              <th class="text-left p-3 px-5">Chem</th>
              <th class="text-left p-3 px-5">Geo</th>
              <th class="text-left p-3 px-5">Eco</th>
              <th class="text-left p-3 px-5">Hist</th>
              <th class="text-left p-3 px-5">Socio</th>
              <th class="text-left p-3 px-5">Actions</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($scores as $score)
            <tr class="border-b hover:bg-orange-100">
              <td class="p-3 px-5">
                {{$score->mathematic}}
              </td>
              <td class="p-3 px-5">
                {{$score->indonesia}}
              </td>
              <td class="p-3 px-5">
                {{$score->english}}
              </td>
              <td class="p-3 px-5">
                {{$score->physic}}
              </td>
              <td class="p-3 px-5">
                {{$score->biology}}
              </td>
              <td class="p-3 px-5">
                {{$score->chemistry}}
              </td>
              <td class="p-3 px-5">
                {{$score->geography}}
              </td>
              <td class="p-3 px-5">
                {{$score->economy}}
              </td>
              <td class="p-3 px-5">
                {{$score->history}}
              </td>
              <td class="p-3 px-5">
                {{$score->sociology}}
              </td>
              <td class="p-3 px-5">

                <a href="/tryout/{{$tryout->id}}/score/{{$score->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                <form action="/tryout/{{$tryout->id}}/score/{{$score->id}}" class="inline-block">
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
