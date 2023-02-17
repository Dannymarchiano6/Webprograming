<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Membuat CRUD dengan PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<center>
	<h1>Tambah Data Mahsiswa fakultas Teknik</h1>
	<form method="post" action="proses_simpan.php">
		<table cellpadding="8">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
				<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr>
				<td>Reg</td>
				<td><input type="text" name="reg"></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
	</center>
</body>
</html>
