<?php
session_start();

	$id_peternakan=$_SESSION["username"];
include "../model/koneksi.php";
if(isset($_POST['create'])){
	$id_kandang=$_POST['idk'];
	$jenis=$_POST['jkandang'];
	$isi=$_POST['isi'];
$id_peternakan=$_SESSION["username"];




$sql=" insert into tb_kandang (`id_kandang`, `id_peternakan`, `id_jenis_kandang`, `isi_kandang`)
VALUES ('$id_kandang','$id_peternakan','$jenis','$isi') ";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Berhasil menambah data')</script>";
	 echo "<script language='javascript'>window.location='../homeadm.php'</script>";

}

?>