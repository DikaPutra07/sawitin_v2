@extends('layouts.layout') <!-- Menggunakan layout utama -->

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold">Riwayat Monitoring</h2>
        <div class="flex items-center space-x-2">
            <span class="text-gray-600">Hari Ini:</span>
            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-md">
                Minggu, 12 Januari 2023
            </div>
            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-md">
                12:09:50 WIB
            </div>
        </div>
    </div>

    <!-- Filter -->
    <div class="flex items-center mb-4">
        <button class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm">
            <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                <path d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v1h-2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7H2V5a2 2 0 012-2h1V3a1 1 0 011-1zM4 7v10a1 1 0 001 1h8a1 1 0 001-1V7H4zm5 3a1 1 0 110 2 1 1 0 010-2z" />
            </svg>
            Filter Tanggal
        </button>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
            <div class="bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
            <img src="{{ asset('uploads/foto1.jpg') }}" alt="Image" class="w-full h-32 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Senin, 12 Januari 2023</h3>
                <ul class="text-gray-600 text-sm mt-2 space-y-1">
                    <li>• Total Tanaman Terdeteksi: <span class="font-bold text-black">150</span> pohon</li>
                    <li>• Tanaman Terdeteksi Berisiko (Penyakit / Hama): <span class="font-bold text-red-500">30</span> pohon</li>
                </ul>
                <a href="#" class="text-green-600 mt-4 inline-block font-medium">Lihat Detail</a>
            </div>
    </div>
    @endfor
</div>
</div>
@endsection