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

       <form action="{{ route('registerto.store') }}" method="post">
            {{ csrf_field() }}

        <div class="form-group">
            <span class="font-medium">Nama Lengkap</span>
            <input name="nama_lengkap" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('nama_lengkap') }}">
            @if ($errors->has('nama_lengkap'))
            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">Asal Sekolah</span>
            <input name="asal_sekolah" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('asal_sekolah') }}">
            @if ($errors->has('asal_sekolah'))
            <span class="text-danger">{{ $errors->first('asal_sekolah') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">Tahun Lulus</span>
            <input name="tahun_lulus" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('tahun_lulus') }}">
            @if ($errors->has('tahun_lulus'))
            <span class="text-danger">{{ $errors->first('tahun_lulus') }}</span>
            @endif
        </div>
        <div class="form-group">
            <span class="font-medium">No HP</span>
            <input name="phone_number" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            value="{{ old('phone_number') }}">
            @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>
         <div class="form-group pt-3 float-right">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Daftar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
