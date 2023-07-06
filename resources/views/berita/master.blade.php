<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Halaman Berita</title>
</head>
<body>
<h1>Selamat datang di halaman berita</h1>
<nav>
    <a href="/berita">Home</a>
    <a href="/berita/olahraga">Berita Olahraga</a>
    <a href="/berita/politik">Berita Politik</a>
</nav>
<hr>
    <h2> @yield('judul') </h2>
    @yield('isi')
<hr>
<footer>
    Dikembangkan oleh Fakultas Teknologi Informasi (<a href="https://fti.unai.edu">http
s://fti.unai.edu</a>)
</footer>
</body>
</html>