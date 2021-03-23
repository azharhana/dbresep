<?php

class database{
var $host="localhost";
var $username="root";
var $password="";
var $database="dbresep";

function __construct() {
	$koneksi = mysqli_connect(
		$this->host,
		$this->username,
		$this->password,
		$this->database);
	if($koneksi) {
		echo "koneksi database berhasil";
	}else{
		echo "koneksi database gagal";
		}
	}
}

$koneksinya = new database();
?>