<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlantIdentificationController extends Controller
{
    public function identifyPlant(Request $request)
    {
    $image = $request->file('image');
    $response = Http::attach(
        'images',
        file_get_contents($image),
        $image->getClientOriginalName()
    )->post('https://api.plant.id/v2/identify', [
        'api_key' => env('PLANT_ID_API_TOKEN'),
        'organelle' => 'leaf'
    ]);

    return view('identification_result', ['result' => $response->json()]);
    }

}
