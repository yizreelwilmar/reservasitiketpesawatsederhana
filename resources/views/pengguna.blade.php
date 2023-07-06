<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengguna.blade.php</title>
</head>
<body>

<h4>Daftar pengguna:</h4>

<table border="1">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
</tr>
</thead>
<tbody>
@foreach($penggunas as $pengguna)
<tr>
<td>{{ $pengguna->id }}</td>
<td>{{ $pengguna->nama }}</td>
<td>{{ $pengguna->username }}</td>
<td>{{ $pengguna->password }}</td>
<td>{{ $pengguna->email }}</td>
<td>{{ $pengguna->jenis_kelamin }}</td>
<td>{{ $pengguna->agama }}</td>
</tr>
@endforeach
</tbody>
</table>

    
</body>
</html>