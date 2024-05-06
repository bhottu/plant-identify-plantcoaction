<!DOCTYPE html>
<html>
<head>
    <title>Hasil Identifikasi Tanaman</title>
</head>
<body>
    <h1>Hasil Identifikasi Tanaman</h1>
    @if(isset($result['suggestions']))
        @foreach($result['suggestions'] as $suggestion)
            <h2>Nama Tanaman: {{ $suggestion['plant_name'] }}</h2>
            <img src="{{ $suggestion['plant_image'] }}" alt="Plant Image">
        @endforeach
    @else
        <p>Tanaman tidak ditemukan.</p>
    @endif
</body>
</html>
