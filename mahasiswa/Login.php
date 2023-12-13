<?php
include("koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO db_login SET username='$username',password='$password'";
mysqli_query($koneksi, $query);

header("location:Index.php");

?>