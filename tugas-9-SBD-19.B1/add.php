<html>
<head>
	<title>Add anggota</title>
</head>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id_anggota</td>
				<td><input type="text" name="id_anggota"></td>
			</tr>
			<tr> 
				<td>kode_anggota</td>
				<td><input type="text" name="kode_anggota"></td>
			</tr>
			<tr> 
				<td>nama_anggota</td>
				<td><input type="text" name="nama_anggota"></td>
			</tr>
			<tr> 
				<td>jk_anggota</td>
				<td><input type="text" name="jk_anggota"></td>
			</tr>
			<tr> 
				<td>jurusan_anggota</td>
				<td><input type="text" name="jurusan_anggota"></td>
			</tr>
			<tr> 
			    <td>no_telp_anggota</td>
				<td><input type="text" name="no_telp_anggota"></td>
			</tr>
			<tr> 
			    <td>alamat_anggota</td>
				<td><input type="text" name="alamat_anggota"></td>
				
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_anggota = $_POST['id_anggota'];
		$kode_anggota = $_POST['kode_anggota'];
		$nama_anggota = $_POST['nama_anggota'];
		$jk_anggota = $_POST['jk_anggota'];
		$jurusan_anggota = $_POST['jurusan_anggota'];
		$no_telp_anggota = $_POST['no_telp_anggota'];
		$alamat_anggota = $_POST['alamat_anggota'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO anggota(id_anggota,kode_anggota,nama_anggota,jk_anggota,jurusan_anggota,no_telp_anggota,alamat_anggota) VALUES('$id_anggota','$kode_anggota','$nama_anggota','$jk_anggota','$jurusan_anggota','$no_telp_anggota','$alamat_anggota')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>