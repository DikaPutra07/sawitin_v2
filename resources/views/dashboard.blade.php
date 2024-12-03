@extends('layouts.layout')

@section('content')

<!-- Page Content -->
<div class="p-6 space-y-6">
    <h1 class="text-2xl font-bold">Selamat Datang, Tsabita </h1>


    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-600">Terakhir Diperbarui: 01/01/2023, 12:34:40 WIB</p>
        <button class="flex items-center px-3.5 py-2 bg-greenModal text-white rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-filter">
                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
            </svg>
            <span>Filter</span>
        </button>
    </div>



    <!-- Information Cards -->
    {{-- <div class="grid grid-cols-3 gap-4 mt-4"> --}}

    <div class="grid grid-cols-3 gap-4 mt-6">
        <div class="col-span-3">
            <h2 class="text-xl font-medium underline decoration-green-500 underline-offset-8">Informasi Tanaman</h2>
        </div>

        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <p class="text-black font-semibold">Total Tanaman Terdeteksi</p>
            <div class="flex items-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mr-0.5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sprout mr-2">
                    <path d="M7 20h10" />
                    <path d="M10 20c5.5-2.5.8-6.4 3-10" />
                    <path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z" />
                    <path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z" />
                </svg>
                <h1 class="text-4xl font-semibold text-black">150 pohon</h1>
            </div>
            <p class="text-gray-600">Lorem Ipsum</p>
        </div>

        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <p class="text-black font-semibold">Total Tanaman Terdeteksi Berisiko</p>
            <div class="flex items-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mr-0.5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sprout mr-2">
                    <path d="M7 20h10" />
                    <path d="M10 20c5.5-2.5.8-6.4 3-10" />
                    <path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z" />
                    <path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z" />
                </svg>
                <h1 class="text-4xl font-semibold text-black">30 pohon</h1>
            </div>
            <p class="text-gray-600">Penyakit Hama</p>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 mt-6">

        <div class="col-span-3">
            <h2 class="text-xl font-medium underline decoration-green-500 underline-offset-8">Keadaan Lingkungan</h2>
        </div>

        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <p class="text-black font-semibold">Kelembapan</p>
            <div class="flex items-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mr-2 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets">
                    <path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z" />
                    <path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97" />
                </svg>
                <h1 class="text-4xl font-semibold text-black">80%</h1>
            </div>
            <p class="text-gray-600">Normal</p>
        </div>


        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <p class="text-black font-semibold">Suhu</p>
            <div class="flex items-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mr-2 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thermometer-sun">
                    <path d="M12 9a4 4 0 0 0-2 7.5" />
                    <path d="M12 3v2" />
                    <path d="m6.6 18.4-1.4 1.4" />
                    <path d="M20 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z" />
                    <path d="M4 13H2" />
                    <path d="M6.34 7.34 4.93 5.93" />
                </svg>
                <h1 class="text-4xl font-semibold text-black">28°C</h1>
            </div>
            <p class="text-gray-600">Normal</p>
        </div>

        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">

            <div class="flex items-center gap-2">
                <p class="text-black font-semibold">Kualitas Udara</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" x2="12" y1="8" y2="12" />
                    <line x1="12" x2="12.01" y1="16" y2="16" />
                </svg>
            </div>
            <div class="flex items-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mr-2 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wind">
                    <path d="M12.8 19.6A2 2 0 1 0 14 16H2" />
                    <path d="M17.5 8a2.5 2.5 0 1 1 2 4H2" />
                    <path d="M9.8 4.4A2 2 0 1 1 11 8H2" />
                </svg>
                <h1 class="text-4xl font-semibold text-black">Cukup Baik</h1>
            </div>
            <p class="text-gray-600">Lorem Ipsum</p>
        </div>

    </div>

    {{-- </div> --}}

    <!-- Charts -->
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <h3 class="text-lg font-semibold mb-2">Grafik Kelembapan</h3>
            <canvas id="chartHumidity"></canvas>
        </div>
        <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
            <h3 class="text-lg font-semibold mb-2">Grafik Suhu</h3>
            <canvas id="chartPH"></canvas>
        </div>
    </div>
</div>
</div>
</div>

<!-- Chart.js Script -->

<script>
    const ctxHumidity = document.getElementById('chartHumidity').getContext('2d');
    const chartHumidity = new Chart(ctxHumidity, {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            datasets: [{
                label: 'Kelembapan',
                data: [20, 30, 45, 60, 70, 50, 65, 55, 40, 80, 90, 120],
                borderColor: 'green',
                borderWidth: 2,
                fill: false
            }]
        }
    });

    const ctxPH = document.getElementById('chartPH').getContext('2d');
    const chartPH = new Chart(ctxPH, {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            datasets: [{
                label: 'Suhu',
                data: [40, 50, 60, 40, 80, 70, 50, 90, 60, 100, 80, 110],
                borderColor: 'green',
                borderWidth: 2,
                fill: false
            }]
        }
    });
</script>

@endsection