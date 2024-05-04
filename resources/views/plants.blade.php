<!-- resources/views/plants.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tanaman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Daftar Tanaman</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($plants as $plant)
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold">{{ $plant['common_name'] }}</h2>
                    <img src="{{ $plant['image_url'] }}" alt="{{ $plant['scientific_name'] }}" class="mt-2">
                    <p class="mt-2">{{ $plant['scientific_name'] }}</p>
                    <p class="mt-2">{{ $plant['family'] }}</p>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $plants->links() }}
        </div>
    </div>
</body>
</html>
