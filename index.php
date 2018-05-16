<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['register'])){ //kondisi untuk mengakses halaman edit
		$main->viewRegister();
	}else if(isset($_GET['logout'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->logout();
	}else if(isset($_GET['login'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->login();
	}else if(isset($_GET['baru'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputbaru();
	}else if(isset($_GET['analis'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewanalis();
	}else if(isset($_GET['analispakan'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewhasilpkn();
	}else if(isset($_GET['analispakankar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewhasilpknkar();
	}else if(isset($_GET['Apakan'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewapakan();
	}else if(isset($_GET['KApakan'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewpakanKar();
	}else if(isset($_GET['jadwalKar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewjadwalkar();
	}else if(isset($_GET['grower'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewgrower();
	}else if(isset($_GET['starter'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewstarter();
	}else if(isset($_GET['indukan'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewindukan();
	}else if(isset($_GET['tambahKar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->tambahkaryawan();

	}else if(isset($_GET['inputkar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputkaryawan();
	}else if(isset($_GET['inputgrower'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputgrw();
	}else if(isset($_GET['inputindk'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputindk();
	}else if(isset($_GET['inputstarter'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputstr();
	}else if(isset($_GET['inputkandang'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->inputkandang();
	}else if(isset($_GET['homeAdm'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewhomeAdm();
	}else if(isset($_GET['homeKar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewhomeKar();

	}else if(isset($_GET['delindk'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->delindk();
	}else if(isset($_GET['delgrw'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->delgrw();
	}else if(isset($_GET['delstr'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->delstr();
	}else if(isset($_GET['kandang'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewkformkandang();
	}else if(isset($_GET['editP'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewFormEdit();
	}else if(isset($_GET['editkand'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->vieweditKan();
	}else if(isset($_GET['editKar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewKar();
	}else if(isset($_GET['editkapr'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewpkar();
	}else if(isset($_GET['updatePT'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updatePT();
	}else if(isset($_GET['rsindk'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updateinduk();
	}else if(isset($_GET['rsgrw'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updategrower();
	}else if(isset($_GET['rsstr'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updatestarter();
	}else if(isset($_GET['updateKar'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updatekar();
	}else if(isset($_GET['updatepakr'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updatepakr();
	}else if(isset($_GET['updatekandang'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->updatekandang();
	}else{
//echo "<script>alert(' Data berhasil diinputkan')</script>";
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}


/*
echo "<script language='javascript'>window.location='view/login3.php'</script>";
*/
?>

