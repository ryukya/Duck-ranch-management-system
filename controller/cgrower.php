<head><script src="../aset/countdown.js" type="text/javascript"></script>
</head>



<?php
session_start();
$tambah=0;
	$id_peternakan=$_SESSION["username"];
include "../model/koneksi.php";
if(isset($_POST['create'])){
	$jadwal=$_POST['jadwal'];
	$kandang=$_POST['kandang'];

$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($jadwal) {
    case "cln":

//$deadline=date_add($mulai,date_interval_create_from_date_string("14 days"));
$deadline=date('Y-m-d', strtotime('+14 days'));


        break;
    case "jln":
$deadline=date('Y-m-d', strtotime('+21 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+90 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+60 days'));
        break;
    case "shu":
$deadline=date('Y-m-d', strtotime('+7 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}
/*
$hario=mysql_query("select * from tb_jenis_jadwal where id_jenis_jadwal= '$jadwal' ");
while($rdata=mysql_fetch_array($hario)){
$tambah=$rdata["hari"];
}
$mulai=date("Y-m-d"); 
$deadline=date('Y-m-d', strtotime('+'$tambah' days'));
*/





$sql=" insert into `dr_isis`.`tb_jadwal_grower` (`id_grower`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) 
VALUES (NULL,'$kandang','$jadwal',' $deadline 07:00:00.000000 ','0') ";
$select=mysql_query($sql) or die (mysql_error());


	echo "<script>alert('Berhasil membuat jadwal :$deadline')</script>";
	 echo "<script language='javascript'>window.location='../grower.php'</script>";
}



?>