<html>
<head>
    <title>Identification Result</title>
</head>
<body>
    <h1>Identification Result</h1>
    @if(isset($plant))
        <p>Common Name: {{ $plant['common_name'] }}</p>
        <p>Scientific Name: {{ $plant['scientific_name'] }}</p>
        <img src="{{ $plant['image_url'] }}" alt="Plant Image">
    @endif
</body>
</html>
