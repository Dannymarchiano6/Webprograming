<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Membuat CRUD dengan PHP</title>
	<link href="style.css" rel="stylesheet" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<section>
    <center>
            <oenter><font style="font-size: 40px;">SELAMAT DATANG</font></oenter>
    </center>
    </section>
	<center>
	<h1>Data Mahasiswa Fakultas teknik</h1>
	</center>
	<center>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	</center>
	<table border="1" width="100%" class="table table-dark table-striped">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Semester</th>
		<th>Reg</th>
		<th colspan="2" center>Proses</th>
	</tr>
	<?php
	include "koneksi.php";

	$sql = $pdo->prepare("SELECT * FROM mahasiswa");
	$sql->execute();

	while($data = $sql->fetch()){
		echo "<tr>";
		echo "<td>".$data['nim']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td>".$data['semester']."</td>";
		echo "<td>".$data['reg']."</td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<center>
    <footer>
            Copyright &copy/ 2022 Danny. All right Reserved
    </footer>
	</center>
</body>
</html>
