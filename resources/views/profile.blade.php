{{-- resources/views/monitoring.blade.php --}}
@extends('layouts.layout')

@section('content')
<main class="flex-1 p-6">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold">Masukkan Informasi Perkebunan</h2>

    </div>
    <!-- Form -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Left Column -->
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">Nama Lahan:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Alamat:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Longitude:</label>
                    <input type="text" placeholder="9.9999" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-gray-700">Latitude:</label>
                    <input type="text" placeholder="9.9999" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
            </div>

            <div>
                <label class="block text-gray-700">Luas Lahan:</label>
                <input type="text" placeholder="9999" class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Jenis Tanah:</label>
                <select class="w-full p-2 border border-gray-300 rounded-md">
                    <option>Pilih</option>
                    <option>Gambut</option>
                    <option>Pasir</option>
                    <option>Tanah Liat</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700">Suhu Rata-Rata:</label>
                <input type="text" placeholder="99" class="w-full p-2 border border-gray-300 rounded-md">
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">Nama Pemilik:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Peta:</label>
                <img src="{{ asset('uploads/Peta.jpg') }}" alt="Map" class="w-full h-56 object-cover rounded-md border">
            </div>

            <div>
                <label class="block text-gray-700">Catatan:</label>
                <textarea placeholder="Tambahan informasi terkait akses jalan, kondisi lahan, dsb." class="w-full p-2 border border-gray-300 rounded-md"></textarea>
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Simpan</button>
        </div>
    </div>
</main>
@endsection