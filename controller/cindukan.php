<?php
session_start();

	$id_peternakan=$_SESSION["username"];
include "../model/koneksi.php";
if(isset($_POST['create'])){
	$jadwal=$_POST['jadwal'];
	$kandang=$_POST['kandang'];






$sql=" insert into `dr_isis`.`tb_jadwal_indukan` (`id_indukan`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) 
VALUES (NULL,'$kandang','$jadwal','2015-11-17 00:00:00.000000','0') ";
$select=mysql_query($sql) or die (mysql_error());


	echo "<script>alert('Berhasil membuat jadwal')</script>";
	 echo "<script language='javascript'>window.location='../homeadm.php'</script>";
}



?>