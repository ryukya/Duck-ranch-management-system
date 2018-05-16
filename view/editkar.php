<?php 
if(!isset($_SESSION["idpt"])){
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
        <a href="homeadm.php" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">DR ISIS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>DR</b>ISIS</span>
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
                      <a href="controller/clogout.php" class="btn btn-default btn-flat">Sign out</a>
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
                <li><a href="index.php?homeAdm"><i class="fa fa-circle-o"></i> Profil Peternakan</a> </li>
                <li><a href="index.php?analis"><i class="fa fa-circle-o"></i> Hasil Analisis</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="index.php?Apakan">
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
                <li><a href="index.php?tambahKar"><i class="fa fa-circle-o"></i> Tambah Karyawan</a></li>
                <li><a href="index.php?editKar"><i class="fa fa-circle-o"></i> Edit Karyawan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Jadwal</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?starter"><i class="fa fa-circle-o"></i> Jadwal Starter</a></li>
                <li><a href="index.php?grower"><i class="fa fa-circle-o"></i> Jadwal Grower</a></li>

                <li><a href="index.php?indukan"><i class="fa fa-circle-o"></i> Jadwal Indukan</a></li>
              </ul>
            </li>

            <li>
              <a href="index.php?kandang">
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
            <h4>Tambah Karyawan</h4>
            <p>Menambah data tentang karyawan anda dan penugasannya</p>
          </div>
  
         <div class="box">
                <div class="box-body no-padding">
            <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                <?php  if ($data!=null) { 

foreach ( $data as $var ) {
                  ?>
                  <h3 class="box-title">Form Karyawan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="index.php?updateKar">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name Karyawan</label>
                      <input type="disabled" class="form-control" value="<?php echo $_SESSION["idkr"];?>" placeholder="username" name="usr" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Karyawan</label>
                      <input type="text" class="form-control" value="<?php echo $var["nama_karyawan"];?>" placeholder="nama" name="nm">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Telpon Karyawan</label>
                      <input type="number" class="form-control" value="<?php echo $var["no_telp"];?>" placeholder="telp" name="tlp">
                    </div>
                             <div class="form-group">
                      <label>ID_kandang</label>
                      <select name="kandang" class="form-control">
                        <?php 
//membuka koneksi
include "model/koneksi.php";
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_kandang kd
join tb_jenis_kandang sr on sr.id_jenis_kandang=kd.id_jenis_kandang  where   id_peternakan = '".$_SESSION['idpt']."'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>
    <option value="<?php echo $rdata["id_kandang"];      ?>" 
    <?php if($rdata["id_kandang"]==$var["id_kandang"])  {  ?> selected <?php }?>  ><?php echo $rdata["id_kandang"];?>&nbsp;</option>
                        
 <?php } ?> 
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" value="<?php echo $var["pass"];?>" placeholder="Password" name="passkar">
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="checkbox">
                      
                    </div>
                    <?php  } 
                    } else {?> <h3>Pilih Data karyawan yang ingin diubah</h3> <?php  }?>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="create">Simpan</button>
                  </div>
                </form>
              </div><!-- /.box -->
    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Username Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>ID Kandang</th>
                        <th>Jenis Kandang</th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody> <?php 
                                $indeks=1;
                                if($tugas!=null)
{
foreach ( $tugas as $var ) {  
?><tr>
    <td><?php echo $indeks;?>&nbsp;</td>
    <td><?php echo $var["id_karyawan"];?>&nbsp;</td>
    <td><?php echo $var["nama_karyawan"];?>&nbsp;</td>
    <td><?php echo $var["id_kandang"];?>&nbsp;</td>
    <td><?php echo $var["nama_jenis_kandang"];?>&nbsp;</td>
  <td>    [ <a href="index.php?editKar&idkar=<?php echo $var["id_karyawan"];?>">Edit</a> ] </td>
  </tr>
 <?php 
$indeks=$indeks+1;
} 
 } else { ?> <h3>Maaf Data penugasan karyawan masih kosong</h3>
 <?php  }?>
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
