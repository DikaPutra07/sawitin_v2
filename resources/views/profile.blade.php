{{-- resources/views/monitoring.blade.php --}}
@extends('layouts.layout')

@section('content')
<main class="flex-1 p-6">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold">Masukkan Informasi Perkebunan</h2>
        <a href="" class="bg-greenModal text-white px-4 py-2 rounded-md hover:bg-green-600 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save mr-2"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
            <p>Simpan</p>
        </a>
    </div>
    <!-- Form -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Left Column -->
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">Nama Pemilik:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Nama Perkebunan:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Luas Lahan:</label>
                <input type="text" placeholder="9999" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
            </div>

            <div>
                <label class="block text-gray-700">Jenis Tanah:</label>
                <select class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
                    <option>Pilih</option>
                    <option>Gambut</option>
                    <option>Pasir</option>
                    <option>Tanah Liat</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700">Sumber Air:</label>
                <select class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
                    <option>Pilih</option>
                    <option>Sumur</option>
                    <option>Sungai</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700">Suhu Rata-Rata:</label>
                <input type="text" placeholder="99" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
            </div>

            {{-- tambahkan catatan --}}
            <div>
                <label class="block text-gray-700">Catatan:</label>
                <textarea id="message" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-creme rounded-lg border-1 border-greentea" placeholder="Write your thoughts here..."></textarea>            
            </div>

        </div>

        <!-- Right Column -->
        <div class="space-y-4">

            <div>
                <label class="block text-gray-700">Mapping Area:</label>
                <img src="{{ asset('uploads/Mapping default.jpg') }}" alt="Map" class="w-full h-64 object-cover rounded-md border">
            </div>

            <div>
                <label class="block text-gray-700">Alamat:</label>
                <input type="text" placeholder="Lorem Ipsum" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Longitude:</label>
                    <input type="text" placeholder="9.9999" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
                </div>
                <div>
                    <label class="block text-gray-700">Latitude:</label>
                    <input type="text" placeholder="9.9999" class="w-full p-2 bg-creme border-1 border-greentea rounded-md">
                </div>
            </div>

            <div>
                <label class="block text-gray-700">Peta:</label>
                <img src="{{ asset('uploads/Peta.jpg') }}" alt="Map" class="w-full h-56 object-cover rounded-md border">
            </div>


            
        </div>
    </div>
</main>
@endsection