<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantIdentificationController;

Route::post('/identify-plant', [PlantIdentificationController::class, 'identifyPlant']);
=======
// routes/web.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PlantController;
use GuzzleHttp\Client;

Route::view('/', 'upload');
Route::get('/plants', [PlantController::class, 'index']);

Route::post('/identify', function (Request $request) {
    $response = Http::withHeaders([
        'Authorization' => 'Bearer Yk6Iv0S8weu7TIu2vOwiI-2KZlVg8mXjIja82oSVbKn0', // Ganti dengan API key Trefle.io Anda
    ])->attach('image', file_get_contents($request->file('image')), 'image.jpg')
      ->post('https://trefle.io/api/v1/plants/identify');

    return view('result', ['result' => $response->json()]);
})->name('identify');

// check API berfungsi atau gak

Route::get('/check-api', function () {
    $client = new Client();
    $response = $client->request('GET', 'https://trefle.io/api/v1/plants', [
        'headers' => [
            'Authorization' => 'Bearer Yk6Iv0S8weu7TIu2vOwiI-2KZlVg8mXjIja82oSVbKn0', // Ganti dengan API key Trefle.io Anda
        ]
    ]);

    $plants = json_decode($response->getBody(), true)['data'] ?? [];
    
    dd($plants); // Cetak data tanaman untuk pengecekan

    // Jika data ditampilkan dengan benar, maka API berfungsi dengan baik
    // Jika tidak, periksa kembali konfigurasi API key dan endpoint API
});
>>>>>>> origin/master
