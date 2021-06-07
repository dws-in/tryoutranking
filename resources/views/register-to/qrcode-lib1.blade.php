<x-app-layout>
  <x-slot name="header">
    <h1 class="font-semibold text-gray-800 leading-tight" style="font-size: xx-large;">
      {{ __('Billing') }}
    </h1>
    <p style="font-size: small;">Scan code below to check your bill</p>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

      <div class="visible-print text-center">
        <p>Using Endroid Library</p>
        <img src="{{$qrcode}}" alt="">
          <p>Scan me to return to the base page.</p>
      </div>

      </div>
    </div>
  </div>
</x-app-layout>
