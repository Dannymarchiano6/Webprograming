<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Membuat CRUD dengan PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<center>
	<h1>Ubah Data Mahasiswa Teknik</h1>

	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = $pdo->prepare("SELECT * FROM mahasiswa WHERE id=:id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$data = $sql->fetch();
	?>

	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
		<table cellpadding="8" class="table table-dark">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<?php
				if($data['jenis_kelamin'] == "Laki-laki"){
					echo "<input type='radio' name='jenis_kelamin' value='Laki-laki' checked='checked'> Laki-laki";
					echo "<input type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan";
				}else{
					echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'> Laki-laki";
					echo "<input type='radio' name='jenis_kelamin' value='Perempuan' checked='checked'> Perempuan";
				}
				?>
				</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester" value="<?php echo $data['semester']; ?>"></td>
			</tr>
			<tr>
				<td>Reg</td>
				<td><input type="text" name="reg" value="<?php echo $data['reg']; ?>"></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Ubah">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
		</center>
</body>
</html>
