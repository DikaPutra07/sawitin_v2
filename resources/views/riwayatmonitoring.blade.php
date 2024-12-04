@extends('layouts.layout') <!-- Menggunakan layout utama -->

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold">Riwayat Monitoring</h2>
    </div>

    <!-- Filter -->
    <div class="flex items-center mb-4">
        <button class="flex items-center px-4 py-2 bg-white border-1 border-greentea rounded-md shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                <path d="M8 2v4" />
                <path d="M16 2v4" />
                <rect width="18" height="18" x="3" y="4" rx="2" />
                <path d="M3 10h18" />
            </svg>
            <p>Filter Tanggal</p>
        </button>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
            <div class="bg-creme border-1 border-greentea rounded-md shadow-sm overflow-hidden">
            <img src="{{ asset('uploads/foto1.jpg') }}" alt="Image" class="w-full h-32 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Senin, 12 Januari 2023</h3>
                <ul class="text-gray-600 text-sm mt-2 space-y-1">
                    <li>• Total Tanaman Terdeteksi: <span class="font-bold text-black">150</span> pohon</li>
                    <li>• Tanaman Terdeteksi Berisiko (Penyakit / Hama): <span class="font-bold text-red-500">30</span> pohon</li>
                </ul>
                <a href="monitoring" class="text-green-600 mt-4 inline-block font-medium">Lihat Detail</a>
            </div>
    </div>
    @endfor
</div>
</div>
@endsection