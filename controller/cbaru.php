<?php

include "../model/koneksi.php";
if(isset($_POST['create'])){
	$id_peternakan=$_POST['id_peternakan'];
	$nama=$_POST['nama_pemilik'];
	$password=$_POST['pass'];
	$tgl=$_POST['tgl'];
	$jstr=$_POST['jstr'];
		$lstr=$_POST['lstr'];
			$jgwr=$_POST['jgwr'];
	$lgwr=$_POST['lgwr'];
		$jindk=$_POST['jindk'];
		$lindk=$_POST['lindk'];
$nama_peternakan=$_POST["npeternakan"];




$sql=" insert into tb_peternakan (`id_peternakan`, `password`, `nama_pemilik`, `nama_peternakan`, `tanggal_berdiri`, `jumlah_kandang_stater`, `luas_kandang_stater`, `jumlah_kandang_grower`, `luas_kandang_grower`, `jumlah_kandang_indukan`, `luas_kandang_indukan`)
VALUES ('$id_peternakan','$password', '$nama','$nama_peternakan','$tgl','$jstr', '$lstr','$jgwr','$lgwr','$jindk', '$lindk') ";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Selamat Bergabung $nama')</script>";
	session_start();
		//mendefinisikan variabel session username
		$_SESSION["username"]=$_POST['id_peternakan'];
	
	 echo "<script language='javascript'>window.location='../homeadm.php'</script>";

}

?>