<?php 
if(!isset($_SESSION["idkar"])){
echo "<script language='javascript'>window.location='index.php'</script>";

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DR ISIS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="aset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="aset/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

 <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">YOU</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
              <a href="index.php?logout" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Logout</span>
                </a>
                <ul class="dropdown-menu">

                    <div class="pull-right">
                      <a href="index." class="btn btn-default btn-flat">Sign out</a>
                    </div>
                                   
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>


      <!-- =============================================== -->

         <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
              <a href="index.php?homeKar">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?KApakan">
                <i class="fa fa-pie-chart"></i>
                <span>Analisis Pakan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Profil</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?editkapr"><i class="fa fa-circle-o"></i> Edit Profil</a></li>
              </ul>
            </li>
            

            <li>
              <a href="index.php?jadwalKar">
                <i class="fa fa-th"></i> <span>Jadwal</span> 
              </a>
            </li>
              <li class="header">LABELS</li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Karyawan
            <small> </small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="callout callout-info">
            <h4>Jadwal Kerja</h4>
            <p>Menampilkan jadwal kerja  untuk karyawan</p>
          </div>
  
         <div class="box">
                <div class="box-body no-padding">
            <!-- general form elements -->
              <div class="box box-primary">
               

<div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                  <h2>Daftar Jadwal </h2>
                    <thead>
                      <tr>
            <th class="text-center">ID Kandang</th>
            <th class="text-center"> Isi Kandang</th>
            <th class="text-center">Jenis Jadwal</th>
            <th class="text-center">Countdown Bar</th>
            <th class="text-center">Deadline</th>
            <th class="text-center">Aksi</th>
          </tr>
                    </thead>
                    <tbody>
                                               <?php 
                                $indeks=1;
                                if($jdw!=null)
{
foreach ( $jdw as $var ) {  
?><tr>
<td><?php echo $var["id_kandang"];?>&nbsp;</td>
    <td><?php echo $var["isi_kandang"];?>&nbsp;</td>
    <td><?php echo $var["jenis_jadwal"];?>&nbsp;</td>
    <td>
                        <div class="progress progress-xs progress-striped active">
    <?php 
$now=date("Y-m-d");
if($now< $var["deadline"]){

     ?>
                          <div class="progress-bar progress-bar-success " style="width:  90%"></div></td>
    <?php } else { ?>
                       <div class="progress-bar progress-bar-danger " style="width:  90%"></div></td>
   
    <?php } ?>
    <td><?php echo $var["deadline"];?>&nbsp;</td>
<?php       
if($now< $var["deadline"]){


?>
    <td>Belum Waktunya</td>
  <?php } else {?>
  <td><a class="btn btn-warning" href="index.php?rsstr&idjd=<?php echo $var["id_jadwal"];?>&jns=<?php echo $var["id_jenis_jadwal"];?>">Done</a>  </td>
  
<?php  }?>

  </tr>
 <?php 
$indeks=$indeks+1;
} 
 } 

 $indeks=1;
                                if($jdw2!=null)
{
foreach ( $jdw2 as $var ) {  
?><tr>
<td><?php echo $var["id_kandang"];?>&nbsp;</td>
    <td><?php echo $var["isi_kandang"];?>&nbsp;</td>
    <td><?php echo $var["jenis_jadwal"];?>&nbsp;</td>
    <td>
                        <div class="progress progress-xs progress-striped active">
   <?php 
$now=date("Y-m-d");
if($now< $var["deadline"]){

     ?>
                          <div class="progress-bar progress-bar-success " style="width:  90%"></div></td>
    <?php } else { ?>
                       <div class="progress-bar progress-bar-danger " style="width:  90%"></div></td>
   
    <?php } ?>  
    <td><?php echo $var["deadline"];?>&nbsp;</td>
  <?php       
if($now < $var["deadline"]){


?>
    <td>Belum Waktunya</td>
  <?php } else {?>
  <td><a class="btn btn-warning" href="index.php?rsindk&idjd=<?php echo $var["id_jadwal"];?>&jns=<?php echo $var["id_jenis_jadwal"];?>">Done</a>  </td>
  
<?php  }?>

  </tr>
 <?php 
$indeks=$indeks+1;
} 
 } 


 $indeks=1;
                                if($jdw3!=null)
{
foreach ( $jdw3 as $var ) {  
?><tr>
<td><?php echo $var["id_kandang"];?>&nbsp;</td>
    <td><?php echo $var["isi_kandang"];?>&nbsp;</td>
    <td><?php echo $var["jenis_jadwal"];?>&nbsp;</td>
    <td>
                        <div class="progress progress-xs progress-striped active">
     <?php 
$now=date("Y-m-d");
if($now< $var["deadline"]){

     ?>
                          <div class="progress-bar progress-bar-success " style="width:  90%"></div></td>
    <?php } else { ?>
                       <div class="progress-bar progress-bar-danger " style="width:  90%"></div></td>
   
    <?php } ?>
      <td><?php echo $var["deadline"];?>&nbsp;</td>
<?php       
if($now<= $var["deadline"]){


?>
    <td>Belum Waktunya</td>
  <?php } else {?>
  <td><a class="btn btn-warning" href="index.php?rsgrw&idjd=<?php echo $var["id_jadwal"];?>&jns=<?php echo $var["id_jenis_jadwal"];?>">Done</a>  </td>
  
<?php  }?>
  </tr>
 <?php 
$indeks=$indeks+1;
} 
 } 


 ?> 
                    </tbody>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
              </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
