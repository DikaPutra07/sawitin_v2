@extends('layouts.layout')

@section('content')

      <div class="p-6 space-y-6">
        <h1 class="text-xl font-bold">Monitoring Pohon</h1>
        <p class="text-sm text-gray-600 mb-6">Silakan unggah foto pohon yang ingin Anda analisis di bawah ini.</p>
        <form class="">
            <label class="block mb-2 font-medium text-gray-900" for="file_input">Upload file</label>
            <input class="block w-full text-gray-900 border text-bold border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
            <button type="submit" class=" mt-4 px-6 py-2 bg-green-500 text-white text-md font-bold rounded-lg hover:bg-green-600">Upload</button>
        </form>

        <div class="border border-gray-300 rounded p-4 bg-white">
          <h3 class="text-gray-700 font-semibold mb-2">Hasil Monitoring Pohon</h3>
          <p class="text-gray-500 italic">Hasil monitoring belum tersedia</p>
        </div>
      </div>

@endsection