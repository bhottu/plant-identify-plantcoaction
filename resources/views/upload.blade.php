<!-- resources/views/upload.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Identifikasi Tanaman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <form action="{{ route('identify') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" accept="image/*" class="border p-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Identifikasi</button>
        </form>
        <a href="/plants" class="text-blue-500 mt-4 inline-block">Tampilkan semua</a>
    </div>
</body>
</html>
