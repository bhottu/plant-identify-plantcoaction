<!DOCTYPE html>
<html>
<head>
    <title>Identifikasi Tanaman</title>
</head>
<body>
    <form action="/identify-plant" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <button type="submit">Identifikasi Tanaman</button>
    </form>
</body>
</html>
