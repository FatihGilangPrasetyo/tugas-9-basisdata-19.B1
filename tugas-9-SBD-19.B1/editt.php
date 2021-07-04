<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_anggota = $_POST['id_anggota'];
	
	$kode_anggota=$_POST['kode_anggota'];
	$nama_anggota=$_POST['nama_anggota'];
	$jk_anggota=$_POST['jk_anggota'];
	$jurusan_anggota=$_POST['jurusan_anggota'];
    $no_telp_anggota=$_POST['no_telp_anggota'];
    $alamat_anggota=$_POST['alamat_anggota'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE anggota SET id_anggota='$id_anggota',kode_anggota='$kode_anggota',nama_anggota='$nama_anggota',jk_anggota='$jk_anggota',jurusan_anggota='$jurusan_anggota',no_telp_anggota='$no_telp_anggota',alamat_anggota='$alamat_anggota WHERE id_anggota=$id_anggota");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_anggota = $_GET['id_anggota'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
 
while($user_data = mysqli_fetch_array($result))
{
	$kode_anggota = $user_data['kode_anggota'];
	$nama_anggota = $user_data['nama_anggota'];
	$jk_anggota = $user_data['jk_anggota'];
	$jurusan_anggota = $user_data['jurusan_anggota'];
    $no_telp_anggota = $user_data['no_telp_anggota'];
    $alamat_anggota = $user_data['alamat_anggota'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
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

			</tr>
			<tr>

				<td><input type="hidden" name="id_anggota" value=<?php echo $_GET['id_anggota'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>