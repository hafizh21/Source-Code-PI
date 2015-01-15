<?php
$host="localhost";
$user="u910242882_root";
$password="root123";
$database="u910242882_ujian";

$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
	//echo "berhasil koneksi";
}else{
	echo "gagal koneksi";
}
?>