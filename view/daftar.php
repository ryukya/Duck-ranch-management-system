<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="aset/dist/css/skins/_all-skins.min.css">
<script type="text/javascript" src="aset/jquery.js"></script>
<script type="text/javascript" src="aset/jquery.validate.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="login2.php" class="navbar-brand"><b>DR ISIS </b>beta</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">About Us <span class="sr-only">(current)</span></a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Info</a></li>
                
              </ul>
            </div><!-- /.navbar-collapse -->


          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              DR ISIS 
              <small>beta</small>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">
            <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Pendaftaran</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form id="myForm"  method="post" action="index.php?baru">
                    <!-- text input -->
                    <div class="form-group">
                      <label>ID_peternakan</label>
                      <input type="text" class="form-control" class="required" title="Nama harus diisi"  placeholder="Id Peternakan Anda" name="id_peternakan">
                    </div>
                     <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" class="required" title="Nama harus diisi" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <input type="text" class="form-control" class="required" title="Nama harus diisi" placeholder="Nama Pemilik" name="nama_pemilik">
                    </div>
                     <div class="form-group">
                      <label>Nama Peternakan</label>
                      <input type="text" class="form-control" class="required" title="Nama harus diisi" placeholder="Nama Peternakan Anda" name="npeternakan">
                    </div>
                    <!-- Date mm/dd/yyyy -->

                  <div class="form-group">
                    
                      <label>Tanggal Berdiri</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" class="required" title="Nama harus diisi" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask  name="tgl">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                      <label>Jumlah Kandang Starter</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="jstr">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang starter</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="lstr">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Kandang grower</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="jgwr">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang grower</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="lgwr">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Kandang indukan</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="jindk">
                    </div>
                    <div class="form-group">
                      <label>Luas kandang indukan</label>
                      <input type="number" class="form-control" class="required" title="Nama harus diisi" placeholder="Enter ..." name="lindk">
                    </div>
                    


                    <!-- textarea -->
                    



                   <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="create">Daftar</button>
                </div>  

                  </form> 
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

   <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="aset/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="aset/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="aset/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="aset/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="aset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="aset/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="aset/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="aset/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="aset/dist/js/demo.js"></script>

     <script>



      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>


<script type="text/javascript">
$(document).ready(function() {
  $("#myForm").validate();
})
</script>

  </body>
</html>
