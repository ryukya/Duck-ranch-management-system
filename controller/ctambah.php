<?php
session_start();

	$id_peternakan=$_SESSION["username"];
include "../model/koneksi.php";
if(isset($_POST['create'])){
	$username=$_POST['usr'];
	$nama=$_POST['nm'];
	$password=$_POST['passkar'];

	$kandang=$_POST['kandang'];






$sql=" insert into tb_karyawan (`id_karyawan`, `nama_karyawan`, `pass`, `status`, `id_peternakan`)
VALUES ('$username','$nama','$password','0','$id_peternakan') ";
$select=mysql_query($sql) or die (mysql_error());

$sql=" insert into `dr_isis`.`tb_pembagian`  (`id_pembagian`, `id_kandang`, `id_karyawan`)  
VALUES (NULL,'$kandang','$username') ";

$select=mysql_query($sql) or die (mysql_error());
	echo "<script>alert('Berhasil menambah data')</script>";
	 echo "<script language='javascript'>window.location='../homeadm.php'</script>";

}

?>