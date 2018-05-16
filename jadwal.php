<head><script src="aset/countdown.js" type="text/javascript"></script>
</head>



<?php
  function konteske($mulai,$skrg){
   $konteske = ( (strtotime($skrg))-(strtotime($mulai)) )/86400 ;
   return $konteske;
  }
  function kontes_end($skrg,$finalkontes){
   $kontes_end = ( (strtotime($finalkontes))-(strtotime($skrg)) )/86400 ;
   return $kontes_end;
  }
 
  $mulai=date("Y-m-d");
  $start=strtotime($mulai);
  $finalkontes=adddate($mulai,"+7 days");
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
Jadi $mundur hari menuju final ";
?>
<script type="application/javascript">
var myCountdown1 = new Countdown({
                  time: <?php 
$kontes_end = ( (strtotime($finalkontes))-(strtotime($skrg)) );
                  echo "$konteske" ?>, // 86400 seconds = 1 day
                  width:300, 
                  height:60,  
                  rangeHi:"day",
                  style:"flip"  // <- no comma on last item!
                  });

</script>

<?php 
  }
  if($stopkontes==$now){
    echo "
Siapa Pemenangnya ? 
";
  }
  

echo "Example : " . adddate($mulai,"+7 days");

function adddate($vardate,$added)
{
$data = explode("-", $vardate);
$date = new DateTime();
$date->setDate($data[0], $data[1], $data[2]);
$date->modify("".$added."");
$day= $date->format("Y-m-d");
return $day;
}
 ?>

 <script type="application/javascript">
var myCountdown4 = new Countdown({
                  year: (new Date().getFullYear() + 1),   // I'm cheating here... so I don't have to update this every year!
                  //year: 2015,               // This is what you would normally put in here... just a number for the year
                  month:(new ),
                  day:1, 
                  width:300, 
                  height:40, 
                  numbers   :   {
                          font  : "Arial",
                          color : "#FFFFFF",
                          bkgd  : "#365D8B",
                          rounded : 0.15,       // percentage of size 
                          shadow  : {
                                x : 0,      // x offset (in pixels)
                                y : 3,      // y offset (in pixels)
                                s : 4,      // spread
                                c : "#000000",  // color
                                a : 0.4     // alpha  // <- no comma on last item!
                                }
                          } // <- no comma on last item!
                  });

</script>