<?php

$host="localhost";
$username="u910242882_root2";
$password="root2123";
$database="u910242882_komen";
$connect=mysql_connect($host,$username,$password);
if(mysql_select_db($database,$connect)==true){
	//echo "sukses";
}else{
	//echo "gagal";
}
?>