<?php
include("koneksi.php");

$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jeniskelamin"];
$alamat = $_POST["alamat"];

$query = "INSERT INTO wali SET nama='$nama',jeniskelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);


header("location:index1.php");

?>