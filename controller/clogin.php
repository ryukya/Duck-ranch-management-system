<?php
include "../model/koneksi.php";
if(isset($_POST['login'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];







$sql="select * from tb_peternakan where id_peternakan='$username' and password='$password'";
$select=mysql_query($sql) or die (mysql_error());

if(mysql_num_rows($select)>0){
	//jika validasi benar menampilkan login sukses dan direct ke dashboard
	echo "<script>alert('Berhasil Login-pemilik ')</script>";
	 echo "<script language='javascript'>window.location='../homeadm.php'</script>";


		//mulai session
		session_start();
		//mendefinisikan variabel session username
		$_SESSION["username"]=$_POST["user"];
	


}else {
$sql="select * from tb_karyawan where id_karyawan='$username' and pass='$password'";
$select=mysql_query($sql) or die (mysql_error());
if(mysql_num_rows($select)>0){
	//jika validasi benar menampilkan login sukses dan direct ke dashboard
	echo "<script>alert('Berhasil Login-karyawan')</script>";
		echo "<script language='javascript'>window.location='../admin.php'</script>";

//mulai session
		session_start();
		//mendefinisikan variabel session username
		$_SESSION["username"]=$_POST["user"];
	

}
else{

	if ($username ==null && $password ==null){
	echo "<script>alert('Username atau password anda masih kosong.')</script>";

	}
	//jika gagal akan mengeluarkan  alert user atau password salah
else{
	echo "<script>alert('Username atau password anda salah')</script>";

}
}


}


}

?>

