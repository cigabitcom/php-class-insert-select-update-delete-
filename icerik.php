<?php

include_once('newclass.php');
include_once('baslik.php');

date_default_timezone_set('Europe/Istanbul');

$islem = new Database();
$islem->connect();





$ab=$islem->select('mesajlar');
while($islem=$ab->fetch_array()){
echo "ID: ".$islem[0]." <a href='sil.php?silid=$islem[0]'>SİL</a> | <a href='guncelle.php?guncelleid=$islem[0]'>Güncelle</a><br />";
echo "Başlık: ".$islem[1]."<br />";
echo "İçerik: ".$islem[2]."<br />";
echo "Tarih: ".$islem[3]."<br />";
echo "<hr>";
}