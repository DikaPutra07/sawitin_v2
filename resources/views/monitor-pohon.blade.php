@extends('layouts.layout')

@section('content')

<div class="p-6 space-y-6">
  <h1 class="text-xl font-bold">Monitoring Pohon</h1>
  <p class="text-sm text-gray-600 mb-6">Silakan unggah foto pohon yang ingin Anda analisis di bawah ini.</p>
  <form method="post" action="/monitoring-pohon" enctype="multipart/form-data" class="">
    @csrf
    <label class="block mb-2 font-medium text-gray-900" for="file_input">Upload file</label>
    <input class="block w-full text-gray-900 border text-bold border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" name="foto" id="foto" type="file">
    <button type="submit" class=" mt-4 px-6 py-2 bg-green-500 text-white text-md font-bold rounded-lg hover:bg-green-600">Upload</button>
  </form>

  <!-- Image Section -->
  @if (isset($pathfoto))
  <div class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden flex">
    <div class="w-1/3">

      <img src="{{ Storage::url($pathfoto) }}" alt="Tanaman" class="h-full w-full object-cover">
    </div>
    <!-- Content Section -->
    <div class="w-2/3 p-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-2"></h2>
      <h3 class="text-xl font-bold text-green-600 mb-4">Prediction:</h3>
      <h3 class="text-xl font-bold text-green-600 mb-4">{{($result['top'])}}</h3>
      <p class="text-sm text-gray-600 font-semibold mb-2">Akurasi: {{$result['confidence']}}</p>
      <p class="text-sm text-gray-600 mb-2">{{$result['1']}}</p>
      <p class="text-sm text-gray-600 font-semibold mb-4">
        Rekomendasi Tinndakan:
      </p>
      <ul class="list-disc pl-5 text-sm text-gray-600 space-y-2">
        <li>{{$result['2']}}</li>
        <li>{{$result['3']}}</li>
        <li>{{$result['4']}}</li>
        <li>{{$result['5']}}</li>
      </ul>
    </div>
  </div>
  @else
  <div class="border border-gray-300 rounded p-4 bg-white">
    <h3 class="text-gray-700 font-semibold mb-2">Hasil Monitoring Pohon</h3>
    <p class="text-gray-500 italic">Hasil monitoring belum tersedia</p>
  </div>
  @endif

</div>

@endsection