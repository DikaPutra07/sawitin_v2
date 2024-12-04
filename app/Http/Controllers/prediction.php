<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class prediction extends Controller
{
    public function index()
    {
        return view('monitor-pohon');
    }
    public function predict(Request $request)
    {
        $url = 'https://detect.roboflow.com/palm-leaves-disease-detection-vxufb/1?api_key=ouYB9cjOv4fCucVyWcz5';
        $request->validate([
            'foto' => 'required|max:2048|mimes:jpg,jpeg,png',
        ]);
        $pathfoto = $request->foto->storeAs('public/images', $request->foto->getClientOriginalName());
        $file = $request->foto;
        $fileContents = file_get_contents(filename: $file->getRealPath());
        $base64Image = base64_encode($fileContents);
        $data = ['' => $base64Image];
        $result = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->withoutVerifying()->post($url, $data)->json();

        if ($result['top'] == 'healthy') {
            $result['top'] = 'Healthy';
            $result['1'] = 'Keterangan: Pohon tidak menunjukkan gejala penyakit atau serangan hama. Daun berwarna hijau segar, batang kuat, dan tidak ada tanda-tanda kerusakan.';
            $result['2'] = 'Pemeliharaan Rutin: Pastikan pohon mendapatkan air dan nutrisi yang cukup melalui pemupukan.';
            $result['3'] = 'Pencegahan Hama dan Penyakit: Lakukan penyemprotan pestisida organik secara berkala.';
            $result['4'] = 'Pemangkasan: Pangkas daun atau ranting yang mulai tua atau kering.';
            $result['5'] = 'Kebersihan Kebun: Jaga area di sekitar pohon tetap bersih untuk mencegah munculnya hama.';
        } elseif ($result['top'] == 'white-scale') {
            $result['top'] = 'White Scale';
            $result['1'] = 'Keterangan: White Scale adalah serangan kutu putih yang menempel pada daun dan batang pohon. Kutu ini mengisap getah pohon, menyebabkan daun menguning, layu, atau bahkan gugur.';
            $result['2'] = 'Identifikasi Awal: Periksa bagian daun dan batang untuk mendeteksi keberadaan kutu putih.';
            $result['3'] = 'Gunakan Pestisida: Aplikasikan pestisida khusus untuk kutu putih (gunakan yang aman bagi lingkungan).';
            $result['4'] = 'Pembersihan Manual: Bersihkan daun yang terinfeksi dengan menyeka daun menggunakan kain lembap.';
            $result['5'] = 'Pengendalian Lingkungan: Pastikan pohon mendapatkan sinar matahari cukup, karena kondisi lembap sering memicu kutu putih.';
        } elseif ($result['top'] == 'brown-spots') {
            $result['top'] = 'Brown Spots';
            $result['1'] = 'Keterangan: Brown Spot adalah penyakit yang disebabkan oleh jamur Helminthosporium atau infeksi bakteri. Gejala utamanya adalah munculnya bercak cokelat pada daun, yang dapat meluas dan menyebabkan kerusakan besar.';
            $result['2'] = 'Pemangkasan: Segera potong dan buang daun yang terinfeksi untuk mencegah penyebaran.';
            $result['3'] = 'Gunakan Fungisida: Aplikasikan fungisida berbasis tembaga atau sulfur secara rutin.';
            $result['4'] = 'Jaga Kebersihan Kebun: Singkirkan sisa daun yang rontok, karena dapat menjadi tempat jamur berkembang biak.';
            $result['5'] = 'Penyesuaian Irigasi: Kurangi penyiraman berlebihan untuk menghindari kelembapan tinggi di sekitar tanaman.';
        }
        return view('monitor-pohon', compact('pathfoto'), compact('result'));
    }
}
