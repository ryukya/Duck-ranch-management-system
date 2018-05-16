<?php 
session_start();
if(!isset($_SESSION["username"])){
echo "<script language='javascript'>window.location='view/login3.php'</script>";

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
        <a href="homeadm.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">DR ISIS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>DR</b>ISIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
              <a href="controller/clogout.php" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Logout</span>
                </a>
                <ul class="dropdown-menu">

                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
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

      <!-- Left side column. contains the sidebar -->
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
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Peternakan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="homeadm.php"><i class="fa fa-circle-o"></i> Profil Peternakan</a> </li>
                <li><a href="analisa.php"><i class="fa fa-circle-o"></i> Hasil Analisis</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Analisis Pakan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Karyawan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="tambahkaryawan.php"><i class="fa fa-circle-o"></i> Tambah Karyawan</a></li>
                <li><a href="tambahkaryawan.php"><i class="fa fa-circle-o"></i> Edit Karyawan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Jadwal</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="stater.php"><i class="fa fa-circle-o"></i> Jadwal Starter</a></li>
                <li><a href="grower.php"><i class="fa fa-circle-o"></i> Jadwal Grower</a></li>

                <li><a href="indukan.php"><i class="fa fa-circle-o"></i> Jadwal Indukan</a></li>
              </ul>
            </li>

            <li>
              <a href="kandang.php">
                <i class="fa fa-th"></i> <span>Kandang</span> 
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
            Pemilik Peternakan
            <small> </small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="callout callout-info">
            <h4>Analisis Peternakan</h4>
            <p>Analisis</p>
          </div>
  
         <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data analisis peternakan anda</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Jenis Kandang</th>
                        <th>Jumlah Kandang</th>
                        <th>Luas Kandang</th>
                        <th>Kapasitas Maksimal Per Kandang</th>
                        <th>Total Maksimal </th>
                      </tr>
                    </thead>
                    <tbody>
                                              <?php 
//membuka koneksi
include "model/koneksi.php";
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_peternakan where id_peternakan = '".$_SESSION['username']."'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?> <tr>
    <td> Kandang Starter</td>
    <td><?php echo $rdata["jumlah_kandang_stater"];?>&nbsp;</td>
    <td><?php echo $rdata["luas_kandang_stater"];?>&nbsp;</td>
    <td><?php $hasil1=$rdata["luas_kandang_stater"]*15;
    echo $hasil1;?> ekor</td>
    <td><?php $hasil1=$rdata["luas_kandang_stater"]* 15 * $rdata["jumlah_kandang_stater"] ;
    echo $hasil1;?> ekor</td>
    
  </tr>
  <tr>
    <td> Kandang Grower</td>
    <td><?php echo $rdata["jumlah_kandang_grower"];?>&nbsp;</td>
    <td><?php echo $rdata["luas_kandang_grower"];?>&nbsp;</td>
    <td><?php $hasil1=$rdata["luas_kandang_grower"]*8;
    echo $hasil1;?> ekor </td>
    <td><?php $hasil1=$rdata["luas_kandang_grower"]* 8 * $rdata["jumlah_kandang_grower"] ;
    echo $hasil1;?> ekor </td>
    
  </tr>

  <tr>
    <td> Kandang Indukan</td>
    <td><?php echo $rdata["jumlah_kandang_indukan"];?>&nbsp;</td>
    <td><?php echo $rdata["luas_kandang_indukan"];?>&nbsp;</td>
    <td><?php $hasil1=$rdata["luas_kandang_indukan"]*5;
    echo $hasil1;?> ekor </td>
    <td><?php $hasil1=$rdata["luas_kandang_indukan"]* 5 * $rdata["jumlah_kandang_indukan"] ;
    echo $hasil1;?> ekor </td>
    
  </tr>
 <?php } ?> 
                    </tbody>
                  </table>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

                

              </div><!-- /.box -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

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
