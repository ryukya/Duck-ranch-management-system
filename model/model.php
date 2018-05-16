<?php

	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			session_start();
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("dr_isis");
		}
		
		function execute($query){
			return mysql_query($query);
		}

function cekLogin($username, $password){
    	$id=$username;
    	$pass=$password;
    	$hasil=$this->cekloginpeternakan($id,$pass);
    	if($hasil==false){
    		$hasil2=$this->cekloginkaryawan($id,$pass);
    		if($hasil2==true){
    				header("location:index.php?homeKar");
        		
    		}
    	
    		else{
        				echo "<script>alert('Username atau password anda salah $id $pass $hasil2 ')</script>";
					echo "<script language='javascript'>window.location='index.php'</script>";
		
    		}
    	} else{
    				header("location:index.php?homeAdm");
        		
    		
    	}

		
    		}


  function cekloginkaryawan($username, $password){
$sql = "SELECT * FROM tb_karyawan ky join tb_pembagian bg 
on bg.id_karyawan=ky.id_karyawan join  tb_kandang kd 
on kd.id_kandang= bg.id_kandang join tb_peternakan pk on pk.id_peternakan=kd.id_peternakan
 WHERE ky.id_karyawan = '$username' and pass = '$password'";
        $query = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($query);
        $cek = mysql_num_rows($query);
        if ($cek > 0) {


            $_SESSION['idkar'] = $username;   
            $_SESSION['pass']=$password;         
            //$_SESSION['']=$password;         
            
            return true;
        } else {
            return false;
            
            
        }   		



}

    function getdataKar(){

	$id=$_SESSION['idkar'];
			$sql = mysql_query("SELECT * FROM tb_karyawan ky join tb_pembagian bg 
on bg.id_karyawan=ky.id_karyawan join  tb_kandang kd 
on kd.id_kandang= bg.id_kandang join tb_peternakan pk on pk.id_peternakan=kd.id_peternakan
 WHERE ky.id_karyawan = '$id'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data[$indeks]["nama_pemilik"]=$radata["nama_pemilik"];
        $data[$indeks] ["nama_peternakan"]=$radata["nama_peternakan"];
        $data[$indeks] ["tanggal_berdiri"]=$radata["tanggal_berdiri"];
        $data[$indeks]["jumlah_kandang_stater"]=$radata["jumlah_kandang_stater"];
        $data [$indeks]["jumlah_kandang_grower"]=$radata["jumlah_kandang_grower"];
        $data[$indeks] ["jumlah_kandang_indukan"]=$radata["jumlah_kandang_indukan"];

        }
return $data;

    }


   function getKar($idk){
$data=null;
$sql = mysql_query("SELECT * FROM tb_karyawan ky join tb_pembagian bg 
on bg.id_karyawan=ky.id_karyawan join  tb_kandang kd 
on kd.id_kandang= bg.id_kandang join tb_peternakan pk on pk.id_peternakan=kd.id_peternakan
 WHERE ky.id_karyawan = '$idk'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){

        $data[$indeks]["nama_karyawan"]=$radata["nama_karyawan"];
        $data[$indeks] ["no_telp"]=$radata["no_telp"];
        $data[$indeks] ["pass"]=$radata["pass"];
        $data[$indeks]["id_kandang"]=$radata["id_kandang"];
        }
return $data;

    }

  function cekloginpeternakan($username, $password){
$sql = "SELECT * FROM tb_peternakan WHERE id_peternakan = '$username' and password = '$password'";
        $query = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($query);
        $cek = mysql_num_rows($query);
        if ($cek > 0) {
            $_SESSION['idpt'] = $username;   
            $_SESSION['pass']=$password;         
            return true;
        } else {
            return false;
            
            
        }   		

}



function inputPeternakan($id_peternakan,$password, $nama,$nama_peternakan,$tgl,$jstr,$lstr,$jgwr,$lgwr,$jindk, $lindk){       


$sql=" insert into tb_peternakan (`id_peternakan`, `password`, `nama_pemilik`, `nama_peternakan`, `tanggal_berdiri`, `jumlah_kandang_stater`, `luas_kandang_stater`, `jumlah_kandang_grower`, `luas_kandang_grower`, `jumlah_kandang_indukan`, `luas_kandang_indukan`)
VALUES ('$id_peternakan','$password', '$nama','$nama_peternakan','$tgl','$jstr', '$lstr','$jgwr','$lgwr','$jindk', '$lindk') ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }


    function inputkand($id_kandang,$isi,$id_jenis,$id){       


$sql=" insert into tb_kandang VALUES ('$id_kandang', '$id','$id_jenis' , '$isi') ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

   function inputindk($kandang,$jadwal,$deadline){       

$sql=" insert into `dr_isis`.`tb_jadwal_indukan` (`id_indukan`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) 
VALUES (NULL,'$kandang','$jadwal',' $deadline 07:00:00.000000 ','0') ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function inputgrw($kandang,$jadwal,$deadline){       

$sql=" insert into `dr_isis`.`tb_jadwal_grower` (`id_grower`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) 
VALUES (NULL,'$kandang','$jadwal',' $deadline 07:00:00.000000 ','0') ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function inputstr($kandang,$jadwal,$deadline){       

$sql=" insert into `dr_isis`.`tb_jadwal_stater` (`id_starter`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) 
VALUES (NULL,'$kandang','$jadwal',' $deadline 07:00:00.000000 ','0') ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }
 function inputkary($id_kar,$nm,$tlp,$kdg,$pas,$id){       

$sql=" insert into tb_karyawan (`id_karyawan`, `nama_karyawan`,`no_telp` ,`pass`, `status`, `id_peternakan`)
VALUES ('$id_kar','$nm','$tlp','$pas','0','$id') ";
$select=mysql_query($sql) or die (mysql_error());

$sql=" insert into `dr_isis`.`tb_pembagian`  (`id_pembagian`, `id_kandang`, `id_karyawan`)  
VALUES (NULL,'$kdg','$id_kar') ";

$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

 function upstr($kandang,$deadline){       

$sql=" update tb_jadwal_stater set deadline ='$deadline 07:00:00.000000' where id_starter ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function upgrw($kandang,$deadline){       

$sql=" update tb_jadwal_grower set deadline ='$deadline 07:00:00.000000' where id_grower ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }
     function upindk($kandang,$deadline){       

$sql=" update tb_jadwal_indukan set deadline ='$deadline 07:00:00.000000' where id_indukan ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function delegrw($kandang){       

$sql=" delete  from tb_jadwal_grower  where id_grower ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function deleindk($kandang){       

$sql=" delete  from tb_jadwal_indukan  where id_indukan ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function delestr($kandang){       

$sql=" delete  from tb_jadwal_stater  where id_starter ='$kandang'";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }


function updatekary($idk,$nm,$tlp,$kdg,$pass) 
{

$sql=" update tb_karyawan  set nama_karyawan='$nm',no_telp='$tlp',pass='$pass' WHERE id_karyawan='$idk' ";
$select=mysql_query($sql) or die (mysql_error());

$sql=" update tb_pembagian  set  id_kandang ='$kdg' where id_karyawan='$idk' ";

$select=mysql_query($sql) or die (mysql_error());

    return true;

}

function updatepkar($idk,$nm,$tlp,$pass) 
{

$sql=" update tb_karyawan  set nama_karyawan='$nm',no_telp='$tlp',pass='$pass' WHERE id_karyawan='$idk' ";
$select=mysql_query($sql) or die (mysql_error());


    return true;

}


 function updatekand($id_kandang,$isi,$id_jenis){       


$sql=" update tb_kandang set  id_jenis_kandang='$id_jenis' , isi_kandang= '$isi'  where id_kandang='$id_kandang' ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }


function updatePeternakan($id_peternakan,$password, $nama,$nama_peternakan,$tgl,$jstr,$lstr,$jgwr,$lgwr,$jindk, $lindk){       


$sql=" update tb_peternakan set password ='$password', nama_pemilik='$nama', nama_peternakan='$nama_peternakan', tanggal_berdiri='$tgl', jumlah_kandang_stater='$jstr', luas_kandang_stater='$lstr', jumlah_kandang_grower='$jgwr', luas_kandang_grower='$lgwr', jumlah_kandang_indukan='$jindk', luas_kandang_indukan ='$lindk'
		where id_peternakan= '$id_peternakan' ";
$select=mysql_query($sql) or die (mysql_error());

    return true;
    }

    function getdataP(){

	$id=$_SESSION['idpt'];
			$sql = mysql_query("select * from tb_peternakan  where id_peternakan= '$id'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id_peternakan"]=$radata["id_peternakan"];
        $data [$indeks]["password"]=$radata["password"];
        $data[$indeks]["nama_pemilik"]=$radata["nama_pemilik"];
        $data[$indeks] ["nama_peternakan"]=$radata["nama_peternakan"];
        $data[$indeks] ["tanggal_berdiri"]=$radata["tanggal_berdiri"];
        $data[$indeks]["jumlah_kandang_stater"]=$radata["jumlah_kandang_stater"];
        $data [$indeks]["luas_kandang_stater"]=$radata["luas_kandang_stater"];
        $data [$indeks]["jumlah_kandang_grower"]=$radata["jumlah_kandang_grower"];
        $data[$indeks]["luas_kandang_grower"]=$radata["luas_kandang_grower"];
        $data[$indeks] ["jumlah_kandang_indukan"]=$radata["jumlah_kandang_indukan"];
        $data[$indeks]["luas_kandang_indukan"]=$radata["luas_kandang_indukan"];
$indeks=$indeks+1;

        }
return $data;

    }

function getPenugasan(){
	$data= null;
		$id=$_SESSION['idpt'];

	$sql2=mysql_query("select * from tb_karyawan kr join tb_pembagian pg on pg.id_karyawan=kr.id_karyawan 
join  tb_kandang kd on kd.id_kandang=pg.id_kandang join tb_jenis_kandang jk on jk.id_jenis_kandang= kd.id_jenis_kandang
join tb_peternakan pk on pk.id_peternakan=kd.id_peternakan where pk.id_peternakan = '$id'");
		$indeks=0;
while($rdata=mysql_fetch_array($sql2)){
      $data [$indeks]["id_pembagian"]=$rdata["id_pembagian"];
        $data [$indeks]["id_karyawan"]=$rdata["id_karyawan"];
        $data[$indeks]["nama_karyawan"]=$rdata["nama_karyawan"];
        $data[$indeks] ["id_kandang"]=$rdata["id_kandang"];
        $data[$indeks]["nama_jenis_kandang"]=$rdata["nama_jenis_kandang"];
$indeks=$indeks+1;



}
return$data;
}


function getanalisisbebek($bebek){
    $data2=null;

            $sql = mysql_query("select * from tb_analisa_pakan where id_jenis_bebek= '$bebek'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){

        $data2 [$indeks]["id_jenis_bebek"]=$radata["id_jenis_bebek"];
        $data2 [$indeks]["bekatul"]=$radata["bekatul"];
        $data2 [$indeks]["tepung_jagung"]=$radata["tepung_jagung"];
        $data2 [$indeks]["daun"]=$radata["daun"];
        $data2 [$indeks]["konsentrat"]=$radata["konsentrat"];
        $data2 [$indeks]["Broiler"]=$radata["Broiler"];
        $data2 [$indeks]["berat"]=$radata["berat"];
$indeks=$indeks+1;

        }
return $data2;

    }
function getanalisis($idpkn){
    $data=null;

            $sql = mysql_query("select * from tb_pemberian_pakan where id_pemberian= '$idpkn'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id_kandang"]=$radata["Nama_method"];
        $data [$indeks]["info"]=$radata["info"];
$indeks=$indeks+1;

        }
return $data;

    }



function getdataKan(){
	$data=null;

	$id=$_SESSION['idpt'];
			$sql = mysql_query("select * from tb_peternakan pt join tb_kandang kd
			on kd.id_peternakan=pt.id_peternakan 
			join tb_jenis_kandang jk on jk.id_jenis_kandang=kd.id_jenis_kandang
			 where pt.id_peternakan= '$id'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data [$indeks]["nama_jenis_kandang"]=$radata["nama_jenis_kandang"];
        $data[$indeks]["isi_kandang"]=$radata["isi_kandang"];
$indeks=$indeks+1;

        }
return $data;

    }




function getskar(){
    $data=null;

    $id=$_SESSION['idkar'];
            $sql = mysql_query("select * from tb_pembagian pg 
                join tb_kandang kd on kd.id_kandang=pg.id_kandang join tb_jadwal_stater gw on gw.id_kandang=kd.id_kandang 
                join tb_jenis_jadwal js on js.id_jenis_jadwal= gw.id_jenis_jadwal where pg.id_karyawan='$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){
            $data [$indeks]["id_jadwal"]=$radata["id_starter"];
        $data[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data[$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data [$indeks]["deadline"]=$radata["deadline"];
      $indeks=$indeks+1;
        }
return $data;

    }

function getgkar(){
    $data3=null;

    $id=$_SESSION['idkar'];
            $sql3 = mysql_query("select * from tb_pembagian pg 
                join tb_kandang kd on kd.id_kandang=pg.id_kandang join tb_jadwal_grower gw on gw.id_kandang=kd.id_kandang 
               join tb_jenis_jadwal js on js.id_jenis_jadwal= gw.id_jenis_jadwal where pg.id_karyawan='$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql3)){
        $    $data3 [$indeks]["id_jadwal"]=$radata["id_grower"];
        $data3[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data3 [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data3 [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data3 [$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data3 [$indeks]["deadline"]=$radata["deadline"];
      $indeks=$indeks+1;
        }
return $data3;

    }


function getikar(){
    $data2=null;

    $id=$_SESSION['idkar'];
            $sql2 = mysql_query("select * from tb_pembagian pg 
                join tb_kandang kd on kd.id_kandang=pg.id_kandang join tb_jadwal_indukan gw on gw.id_kandang=kd.id_kandang 
                join tb_jenis_jadwal js on js.id_jenis_jadwal= gw.id_jenis_jadwal where pg.id_karyawan='$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql2)){
        $    $data2 [$indeks]["id_jadwal"]=$radata["id_indukan"];
        $data2[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data2 [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data2 [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data2[$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data2 [$indeks]["deadline"]=$radata["deadline"];
      $indeks=$indeks+1;
        }
return $data2;

    }


function getgrower(){
    $data=null;

    $id=$_SESSION['idpt'];
            $sql = mysql_query("select * from tb_peternakan pk join tb_kandang kd on kd.id_peternakan=pk.id_peternakan 
  join tb_jadwal_grower st on st.id_kandang=kd.id_kandang join tb_jenis_jadwal jw on jw.id_jenis_jadwal=st.id_jenis_jadwal  
where pk.id_peternakan = '$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){
                 $data [$indeks]["id_jadwal"]=$radata["id_grower"];
        $data[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data[$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data [$indeks]["deadline"]=$radata["deadline"];
$indeks=$indeks+1;

        }
return $data;

    }
    function getstarter(){
    $data=null;

    $id=$_SESSION['idpt'];
            $sql = mysql_query("select * from tb_peternakan pk join tb_kandang kd on kd.id_peternakan=pk.id_peternakan 
  join tb_jadwal_stater st on st.id_kandang=kd.id_kandang join tb_jenis_jadwal jw on jw.id_jenis_jadwal=st.id_jenis_jadwal  
where pk.id_peternakan = '$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){
                 $data [$indeks]["id_jadwal"]=$radata["id_starter"];
        $data[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data[$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data [$indeks]["deadline"]=$radata["deadline"];
$indeks=$indeks+1;

        }
return $data;

    }

    function getindukan(){
    $data=null;

    $id=$_SESSION['idpt'];
            $sql = mysql_query("select * from tb_peternakan pk join tb_kandang kd on kd.id_peternakan=pk.id_peternakan 
  join tb_jadwal_indukan st on st.id_kandang=kd.id_kandang join tb_jenis_jadwal jw on jw.id_jenis_jadwal=st.id_jenis_jadwal  
where pk.id_peternakan = '$id'");
            $indeks=0;
            while($radata=mysql_fetch_array($sql)){
                 $data [$indeks]["id_jadwal"]=$radata["id_indukan"];
        $data[$indeks]["id_jenis_jadwal"]=$radata["id_jenis_jadwal"];
        $data [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data [$indeks]["isi_kandang"]=$radata["isi_kandang"];
        $data[$indeks]["jenis_jadwal"]=$radata["jenis_jadwal"];
        $data [$indeks]["deadline"]=$radata["deadline"];
$indeks=$indeks+1;

        }
return $data;

    }









    function  getdataKd($idk){

	$data2=null;
 $_SESSION['idk'] = $idk; 
			$sql = mysql_query("select * from tb_peternakan pt join tb_kandang kd
			on kd.id_peternakan=pt.id_peternakan 
			join tb_jenis_kandang jk on jk.id_jenis_kandang=kd.id_jenis_kandang
			 where kd.id_kandang='$idk'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data2 [$indeks]["id_kandang"]=$radata["id_kandang"];
        $data2 [$indeks]["id_jenis_kandang"]=$radata["id_jenis_kandang"];
        $data2[$indeks]["isi_kandang"]=$radata["isi_kandang"];
$indeks=$indeks+1;

        }
return $data2;

    }

			//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
	?>