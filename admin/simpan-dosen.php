<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama 		= $_POST['nama'];
$nidn 		= $_POST['nidn'];
$password 	= MD5($_POST['password']);

//query
$query = "INSERT INTO tbl_dosen (nama_dosen, nidn, password)
VALUES ('$nama', '$nidn', '$password')";

if ($connection->query($query) === TRUE) {

	//echo "data berhasil disimpan";
	header("location:dosen.php");

}else{

	echo "data gagal disimpan";
}