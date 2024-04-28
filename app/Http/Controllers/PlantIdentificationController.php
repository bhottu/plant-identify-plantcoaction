<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlantIdentificationController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function identify(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        $file = $request->file('image');
        $data = file_get_contents($file->path());

        $response = Http::post('https://trefle.io/api/plants/identify', [
            'images[]' => base64_encode($data),
            'token' => env('TREFLE_API_TOKEN')
        ]);

        $plant = $response->json('data.0');

        return view('result', ['plant' => $plant]);
    }
}
