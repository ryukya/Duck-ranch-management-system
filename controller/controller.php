<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			include "view/login3.php"; //memamnggil view.php pada folder view
		}
		
 
		function login(){


			$user = $_POST['user'];
			$pw = $_POST['pass'];
			if($pw==null || $user==null){

		echo "<script>alert('Username atau password anda kosong')</script>";
		echo "<script language='javascript'>window.location='index.php'</script>";
		} else{
			$user = $_POST['user'];
			$pw = $_POST['pass'];	
			$login = $this->model->cekLogin($user, $pw);
			}
		}

		function logout(){

session_destroy();
echo "<script language='javascript'>window.location='index.php'</script>";
		}

		function inputbaru(){$id_peternakan=$_POST['id_peternakan'];
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
			if($id_peternakan==null || $password==null || $tgl==null || $lstr==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?register'</script>";
		} else{
		$input=$this->model->inputPeternakan ($id_peternakan,$password, $nama,$nama_peternakan,$tgl,$jstr,$lstr,$jgwr,$lgwr,$jindk, $lindk);
			if($input==true){
	echo "<script>alert('Selamat Bergabung $nama')</script>";

		$_SESSION["idpt"]=$id_peternakan;



		echo "<script language='javascript'>window.location='index.php?homeAdm'</script>";
			

	}
}
		}


		function inputkandang(){

$id_kandang=$_POST['idk'];
$isi=$_POST['isi'];
$id_jenis=$_POST['jkandang'];
$id=$_SESSION['idpt'];
			if($id_kandang==null || $isi==null || $id_jenis==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?kandang'</script>";
		} else{
		$input=$this->model->inputkand ($id_kandang,$isi,$id_jenis,$id);
			if($input==true){
	echo "<script>alert('Berhasil menambah data')</script>";

		echo "<script language='javascript'>window.location='index.php?kandang'</script>";
			

	}
}
		}





function inputindk(){

	$jadwal=$_POST['jadwal'];
	$kandang=$_POST['kandang'];

$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($jadwal) {
    case "cln":

//$deadline=date_add($mulai,date_interval_create_from_date_string("14 days"));
$deadline=date('Y-m-d', strtotime('+21 days'));
        break;
    case "jln":
$deadline=date('Y-m-d', strtotime('+30 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+945 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+40 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}

$input=$this->model->inputindk($kandang,$jadwal,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil membuat jadwal :$deadline')</script>";
	 echo "<script language='javascript'>window.location='index.php?indukan'</script>";
	}

		}






function inputgrw(){

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
$deadline=date('Y-m-d', strtotime('+30 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+90 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+40 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}

$input=$this->model->inputgrw($kandang,$jadwal,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil membuat jadwal :$deadline')</script>";
	 echo "<script language='javascript'>window.location='index.php?grower'</script>";
	}

		}



function inputstr(){

	$jadwal=$_POST['jadwal'];
	$kandang=$_POST['kandang'];

$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($jadwal) {
    case "cln":
$deadline=date('Y-m-d', strtotime('+14 days'));
        break;
    case "shu":
$deadline=date('Y-m-d', strtotime('+7 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+60 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+20 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}

$input=$this->model->inputstr($kandang,$jadwal,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil membuat jadwal :$deadline')</script>";
	 echo "<script language='javascript'>window.location='index.php?starter'</script>";
	}




		}




		function inputkaryawan(){
$id=$_SESSION['idpt'];
$id_kar=$_POST['usr'];
$nm=$_POST['nm'];
$tlp=$_POST['tlp'];
$kdg=$_POST['kandang'];
$pass=$_POST['passkar'];
			if($id_kar==null || $nm==null || $tlp==null || $pass==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?tambahKar'</script>";
		} else{
		$input=$this->model->inputkary($id_kar,$nm,$tlp,$kdg,$pass,$id);
			if($input==true){
	echo "<script>alert('Berhasil menambah data')</script>";

		echo "<script language='javascript'>window.location='index.php?tambahKar'</script>";
			

	}
}
		}


			function updatekandang(){

$id_kandang= $_SESSION['idk'];
$isi=$_POST['isi'];
$id_jenis=$_POST['jkandang'];
			if($id_kandang==null || $isi==null || $id_jenis==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?kandang'</script>";
		} else{
		$input=$this->model->updatekand ($id_kandang,$isi,$id_jenis);
			if($input==true){
	echo "<script>alert('Berhasil menngubah data')</script>";

		echo "<script language='javascript'>window.location='index.php?kandang'</script>";
			

	}
}
		}

			function updatekar(){
$idk=$_SESSION['idkr'];
$nm=$_POST['nm'];
$tlp=$_POST['tlp'];
$kdg=$_POST['kandang'];
$pass=$_POST['passkar'];
		if( $nm==null || $tlp==null || $pass==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?editKar'</script>";
		} else{
		$input=$this->model->updatekary($idk,$nm,$tlp,$kdg,$pass);
			if($input==true){
	echo "<script>alert('Berhasil mengubah data')</script>";

		echo "<script language='javascript'>window.location='index.php?editKar'</script>";
			

	}
}
		}


	function updatepakr(){
$idk=$_SESSION['idkar'];
$nm=$_POST['nm'];
$tlp=$_POST['tlp'];
$pass=$_POST['passkar'];
		if( $nm==null || $tlp==null || $pass==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?editkapr'</script>";
		} else{
		$input=$this->model->updatepkar($idk,$nm,$tlp,$pass);
			if($input==true){
	echo "<script>alert('Berhasil mengubah data')</script>";

		echo "<script language='javascript'>window.location='index.php?homeKar'</script>";
			

	}
}
		}		





function updateinduk(){
$idk=$_GET['idjd'];
$idjd=$_GET['jns'];
	
$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($idjd) {
    case "cln":
$deadline=date('Y-m-d', strtotime('+21 days'));
		  break;
    case "jln":
$deadline=date('Y-m-d', strtotime('+30 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+945 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+40 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}



$input=$this->model->upindk($idk,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil mengubah data')</script>";

	if(isset($_SESSION["idpt"])){
		echo "<script language='javascript'>window.location='index.php?indukan'</script>";
			}
			else{
		echo "<script language='javascript'>window.location='index.php?jadwalKar'</script>";
				
			}		

	}

		}





function updategrower(){
$idk=$_GET['idjd'];
$idjd=$_GET['jns'];
	
$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($idjd) {
    case "cln":

//$deadline=date_add($mulai,date_interval_create_from_date_string("14 days"));
$deadline=date('Y-m-d', strtotime('+14 days'));


        break;
    case "jln":
$deadline=date('Y-m-d', strtotime('+30 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+90 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+40 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}



$input=$this->model->upgrw($idk,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil mengubah data')</script>";
if(isset($_SESSION["idpt"])){
		echo "<script language='javascript'>window.location='index.php?grower'</script>";
			}
			else{
		echo "<script language='javascript'>window.location='index.php?jadwalKar'</script>";
				
			}

	}

		}
		
function updatestarter(){
$idk=$_GET['idjd'];
$idjd=$_GET['jns'];
	
$mulai=date("Y-m-d");

$deadline=date("Y-m-d"); 
switch ($idjd) {
   case "cln":
$deadline=date('Y-m-d', strtotime('+14 days'));
        break;
    case "shu":
$deadline=date('Y-m-d', strtotime('+7 days'));
        break;
    case "klt":
$deadline=date('Y-m-d', strtotime('+60 days'));
        break;
    case "pkn":
$deadline=date('Y-m-d', strtotime('+1 day'));
        break;
    case "vks":
$deadline=date('Y-m-d', strtotime('+20 days'));
        break;
    default:
        echo "Pilihan yag anda pilih tidak kompatibel ! error";
}



$input=$this->model->upstr($idk,$deadline);
			if($input==true){
	echo "<script>alert('Berhasil mengubah data')</script>";

	if(isset($_SESSION["idpt"])){
		echo "<script language='javascript'>window.location='index.php?starter'</script>";
			}
			else{
		echo "<script language='javascript'>window.location='index.php?jadwalKar'</script>";
				
			}	

	}

		}


		function updatePT(){
			$id_peternakan=$_SESSION['idpt'];
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
			if($id_peternakan==null || $password==null || $tgl==null || $lstr==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?editP'</script>";
		} else{
		$input=$this->model->updatePeternakan ($id_peternakan,$password, $nama,$nama_peternakan,$tgl,$jstr,$lstr,$jgwr,$lgwr,$jindk, $lindk);
			if($input==true){
	echo "<script>alert('Data Berhasil Disimpan')</script>";
	echo "<script language='javascript'>window.location='index.php?homeAdm'</script>";
			

	}
}
		}

		function viewRegister(){
			include "view/daftar.php"; //menampilkan halaman untuk mengedit data
		}
		function viewFormEdit(){
			$data = $this->model->getdataP();
				include "view/fedit.php"; //menampilkan halaman untuk mengedit data
		
		}

		function viewanalis(){
			$data = $this->model->getdataP();
				include "view/analisa.php"; //menampilkan halaman untuk mengedit data
		
		}
		function viewhasilpkn(){

	$idpkn=$_POST['idpkn'];
		$bebek=$_POST['bebek'];
		$jml=$_POST['jml'];
		if($jml==null){

		echo "<script>alert('Form tidak boleh kosong')</script>";
	echo "<script language='javascript'>window.location='index.php?Apakan'</script>";
		}else{
			$datas = $this->model->getanalisis($idpkn);
			$data2 = $this->model->getanalisisbebek($bebek);
$tot=null;
foreach ( $data2 as $dt ) {
		
$tot=$jml*$dt["berat"];

}
				include "view/pakan.php"; //menampilkan halaman untuk mengedit data
		}
		}

		function viewhasilpknkar(){

	$idpkn=$_POST['idpkn'];
		$bebek=$_POST['bebek'];
		$jml=$_POST['jml'];
		if($jml==null){

		echo "<script>alert('Form tidak boleh kosong')</script>";
	echo "<script language='javascript'>window.location='index.php?KApakan'</script>";
		}else{
			$datas = $this->model->getanalisis($idpkn);
			$data2 = $this->model->getanalisisbebek($bebek);
$tot=null;
foreach ( $data2 as $dt ) {
		
$tot=$jml*$dt["berat"];

}
				include "view/pakankar.php"; //menampilkan halaman untuk mengedit data
		}
		}

		function viewapakan(){
				include "view/pakan.php"; //menampilkan halaman untuk mengedit data
		
		}
		function viewpakanKar(){
			$datas=null;
				include "view/pakankar.php"; //menampilkan halaman untuk mengedit data
		
		}

function delindk(){
			$idg=$_GET['idjd'];
			$dlt = $this->model->deleindk($idg);
if($dlt==true){
		echo "<script>alert('Jadwal Berhasil Diapus')</script>";
	echo "<script language='javascript'>window.location='index.php?indukan'</script>";
	
}		
		}

		function delgrw(){
			$idg=$_GET['idjd'];
			$dlt = $this->model->delegrw($idg);
if($dlt==true){
		echo "<script>alert('Jadwal Berhasil Diapus')</script>";
	echo "<script language='javascript'>window.location='index.php?grower'</script>";
	
}		
		}
	function delstr(){
			$idg=$_GET['idjd'];
			$dlt = $this->model->delestr($idg);
if($dlt==true){
		echo "<script>alert('Jadwal Berhasil Diapus')</script>";
	echo "<script language='javascript'>window.location='index.php?starter'</script>";
	
}		
		}



 function vieweditKan(){
 	$idk=$_GET['idkd'];
 			$data = $this->model->getdataKd($idk);
				include "view/fkan.php"; //menampilkan halaman untuk mengedit data
}

function viewjadwalkar(){
			$jdw2 = $this->model->getikar();
			$jdw3 = $this->model->getgkar();
			$jdw = $this->model->getskar();
				include "view/jdwkar.php"; //menampilkan halaman untuk mengedit data
				}

		function viewgrower(){
			$jdw = $this->model->getgrower();
				include "view/grower.php"; //menampilkan halaman untuk mengedit data
				}

		function viewstarter(){
			$jdw = $this->model->getstarter();
				include "view/starter.php"; //menampilkan halaman untuk mengedit data
				}
		function viewindukan(){
			$jdw = $this->model->getindukan();
				include "view/indukan.php"; //menampilkan halaman untuk mengedit data
				}

 function viewKar(){
$data=null;
 	if(isset($_GET['idkar'])){
 	$idk=$_GET['idkar'];

 		$_SESSION['idkr']=$idk;
 			$data = $this->model->getKar($idk);
				} 
				else {}
			  $tugas = $this->model->getPenugasan();		
				include "view/editkar.php"; //menampilkan halaman untuk mengedit data
		
	
 }

  function viewpkar(){
$data=null;
$id=$_SESSION['idkar'];

 			$data = $this->model->getKar($id);
			
				include "view/editprof.php"; //menampilkan halaman untuk mengedit data
		
	
 }

		function tambahkaryawan(){

				  $tugas = $this->model->getPenugasan();
	
				include "view/formKar.php"; //menampilkan halaman untuk mengedit data
		
		}
		function viewkformkandang(){
			$data = $this->model->getdataKan();
	
				include "view/formKan.php"; //menampilkan halaman untuk mengedit data
		
		}
		function viewhomeAdm(){
				  $data = $this->model->getdataP();
				  $tugas = $this->model->getPenugasan();
          	include "view/homeadm.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewhomeKar(){
				  $data = $this->model->getdataKar();
			include "view/homekar.php"; //menampilkan halaman untuk mengedit data
		}


		function __destruct(){
		}
	}
?>