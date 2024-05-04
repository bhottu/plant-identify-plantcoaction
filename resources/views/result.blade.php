<!-- resources/views/result.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Identifikasi Tanaman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Hasil Identifikasi Tanaman</h1>
        @if(isset($result['data']))
            <div class="bg-white shadow-md p-4">
                <h2 class="text-lg font-semibold">{{ $result['data']['common_name'] }}</h2>
                <img src="{{ $result['data']['image_url'] }}" alt="{{ $result['data']['scientific_name'] }}" class="mt-2">
                <p class="mt-2">{{ $result['data']['scientific_name'] }}</p>
                <p class="mt-2">{{ $result['data']['family'] }}</p>
            </div>
        @else
            <p class="bg-red-500 text-white p-4">Tanaman tidak dapat diidentifikasi.</p>
        @endif
    
        <a href="/" class="text-blue-500 mt-4 inline-block">Unggah Gambar Lagi</a>

    </div>
</body>
</html>
