<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
</head>
<body>
<h1>Informasi Mahasiswa</h1>

<h2>Nama : {{ $nama }}</h2>

<h3>Mata kuliah yang diambil:</h3>

@foreach($mataKuliah as $mk)

<li>{{ $mk }}</li>

@endforeach

</body>
</html>