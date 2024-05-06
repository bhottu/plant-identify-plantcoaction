<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;


class PlantController extends Controller
{
    public function index()
{
    $response = Http::withHeaders([
        'Authorization' => 'Bearer Yk6Iv0S8weu7TIu2vOwiI-2KZlVg8mXjIja82oSVbKn0', // Ganti dengan API key Trefle.io Anda
    ])->get('https://trefle.io/api/v1/plants');

    $plants = $response->json()['data'] ?? [];
    
    // Membuat instance LengthAwarePaginator
    $perPage = 10; // Jumlah item per halaman
    $currentPage = request()->get('page', 1); // Halaman saat ini
    $offset = ($currentPage - 1) * $perPage;
    $items = array_slice($plants, $offset, $perPage);
    $total = count($plants);
    $paginator = new LengthAwarePaginator($items, $total, $perPage, $currentPage);

    return view('plants', ['plants' => $paginator]);
}git

}


