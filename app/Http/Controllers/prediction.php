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

        return view('monitor-pohon', compact('pathfoto'), compact('result'));
    }
}
