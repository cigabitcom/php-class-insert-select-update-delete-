<?php

include_once('newclass.php');
include_once('baslik.php');

$islem = new Database();
$islem->connect();


if(isset($_GET['silid']))
	{
		
	
		$ids = $_GET['silid'];

		$islem->delete("mesajlar"," id = $ids");
		
		echo  "Başarıyla silindi ...<br>";
		echo  "<img src='islem.gif' height='50px' width='50px'>";
		header("refresh:2;icerik.php");

}else{
	
	
		header("location:icerik.php");
	
}




