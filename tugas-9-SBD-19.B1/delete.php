<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id_anggota = $_GET['id_anggota'];
$kode_anggota = $_GET['kode_anggota'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
$result = mysqli_query($mysqli, "DELETE FROM anggota WHERE kode_anggota=$kode_anggota");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>