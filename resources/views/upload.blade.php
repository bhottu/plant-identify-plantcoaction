<html>
<head>
    <title>Plant Identification</title>
</head>
<body>
    <h1>Plant Identification</h1>
    <form action="/identify" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Identify</button>
    </form>
</body>
</html>
