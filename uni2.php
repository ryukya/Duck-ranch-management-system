<?php
  function konteske($mulai,$skrg){
   $konteske = ( (strtotime($skrg))-(strtotime($mulai)) )/86400 ;
   return $konteske;
  }
  function kontes_end($skrg,$finalkontes){
   $kontes_end = ( (strtotime($finalkontes))-(strtotime($skrg)) )/86400 ;
   return $kontes_end;
  }
 
  $mulai="2009-07-11";
  $start=strtotime($mulai);
  $finalkontes="2009-12-11";
  $stopkontes=strtotime($finalkontes);
  $skrg=date("Y-m-d");
  $now=strtotime($skrg);
 
  if(($now>=$start) && ($now<$stopkontes)){
   $hari=konteske($mulai,date("Y-m-d"));
   $hari=$hari+1;
   echo "
Sekarang hari ke-$hari 
";
   $mundur=kontes_end($skrg,$finalkontes);
   $mundur=$mundur;
   echo "
Jadi $mundur hari menuju final 
";
  }
  if($stopkontes==$now){
    echo "
Siapa Pemenangnya ? 
";
  }
  
 ?>



$d1=strtotime("+1 weeks");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";

$thn= date("Y")+2;
$bln= date("m")+1;
$hr= date("d")+410;

 <?php

function adddate($vardate,$added)
{
$data = explode("-", $vardate);
$date = new DateTime();
$date->setDate($data[0], $data[1], $data[2]);
$date->modify("".$added."");
$day= $date->format("Y-m-d");
return $day;
}

echo "Example : " . adddate("2010-08-01","+1 day");

//--hasil----  Example : 2010-08-02

?>