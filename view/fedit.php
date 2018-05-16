<?php 
if(!isset($_SESSION["idpt"])){
echo "<script language='javascript'>window.location='index.php?login'</script>";

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
              <a href="index.php?logout" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Logout</span>
                </a>
                <ul class="dropdown-menu">

                    <div class="pull-right">
                     
                    </div>
                                   
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
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
          Edit Profil Peternakan
            <small> </small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
         
  
         <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data peternakan anda</h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                   <form id="myForm"  method="post" action="index.php?updatePT">
                    <!-- text input -->
                    <div class="form-group">
                      <label>ID_peternakan</label>
                      <input type="disabled" class="form-control" value="<?php echo $data [0]['id_peternakan'] ?>" placeholder="Id Peternakan Anda" name="id_peternakan" disabled>
                    </div>
                     <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" value="<?php echo $data [0]['password'] ?>" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <input type="text" class="form-control" value="<?php echo $data [0]['nama_pemilik'] ?>" placeholder="Nama Pemilik" name="nama_pemilik">
                    </div>
                     <div class="form-group">
                      <label>Nama Peternakan</label>
                      <input type="text" class="form-control" value="<?php echo $data [0]['nama_peternakan'] ?>" placeholder="Nama Peternakan Anda" name="npeternakan">
                    </div>
                    <!-- Date mm/dd/yyyy -->

                  <div class="form-group">
                    
                      <label>Tanggal Berdiri</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" value="<?php echo $data [0]['tanggal_berdiri'] ?>" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask  name="tgl">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                      <label>Jumlah Kandang Starter</label>
                      <input type="number" class="form-control" value="<?php echo $data [0]['jumlah_kandang_stater'] ?>" placeholder="Enter ..." name="jstr">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang starter</label>
                      <input type="number" class="form-control"value="<?php echo $data [0]['luas_kandang_stater'] ?>" placeholder="Enter ..." name="lstr">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Kandang grower</label>
                      <input type="number" class="form-control" value="<?php echo $data [0]['jumlah_kandang_grower'] ?>" placeholder="Enter ..." name="jgwr">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang grower</label>
                      <input type="number" class="form-control" value="<?php echo $data [0]['luas_kandang_grower'] ?>" placeholder="Enter ..." name="lgwr">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Kandang indukan</label>
                      <input type="number" class="form-control" value="<?php echo $data [0]['jumlah_kandang_indukan'] ?>" placeholder="Enter ..." name="jindk">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang indukan</label>
                      <input type="number" class="form-control" value="<?php echo $data [0]['luas_kandang_indukan'] ?>" placeholder="Enter ..." name="lindk">
                    </div>
                    


                    <!-- textarea -->
                    



                   <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="create">Simpan</button> 
                  <a class="btn btn-danger" href="index.php?homeAdm" > Batal</a>
                </div>  

                  </form> 

                 
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
