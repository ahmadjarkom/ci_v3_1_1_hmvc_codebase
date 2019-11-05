<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Disposisi <?php echo @$page_title; ?></title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="PT Raharja Sinergi Komunikasi">

    <!-- thanks for pike admin -->
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author-template" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/main/png/logo_black.png') ?>">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Custom CSS pike -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" /> 
    <!-- Timeline CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/timeline.css') ?>" />
    
  
    <!-- BEGIN CSS for this page -->

    <!-- my custom build -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/my_custom.css') ?>" />
    <!-- END CSS for this page -->

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css') ?>" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/rowReorder.dataTables.min.css') ?>" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.dataTables.min.css') ?>" /> -->

    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/dataTables.rowReorder.min.js') ?>"></script> -->
    <!-- <script src="<?php echo base_url('assets/js/dataTables.responsive.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/js/my_dataTables.js') ?>"></script>

    <!-- datepicker -->
    <script src="<?php echo base_url('assets/js/moment.min.js') ?>"></script>
    <link href="<?php echo base_url('assets/plugins/datetimepicker/css/daterangepicker.css')?>" rel="stylesheet" type="text/css" />    
    <script src="<?php echo base_url('assets/plugins/datetimepicker/js/daterangepicker.js')?>" rel="stylesheet"></script>

    <!-- chart min -->
    <script src="<?php echo base_url('assets/js/chart.min.js') ?>"></script>


    <!-- file upload -->
    <link href="<?php echo base_url('assets/plugins/jquery.filer/css/jquery.filer.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') ?>" rel="stylesheet" />
</head>
<body class="adminbody">

    <div id="main">
        <!-- top bar navigation -->
        <div class="headerbar">
            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="#" class="logo"><img alt="logo" src="<?php echo base_url('assets/images/main/png/logo.png') ?>" /> <span> e-Disposisi</span></a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <?php //$this->load->view('template_notif_message'); ?>

                    <?php $this->load->view('template_logout'); ?>
                </ul>

                <ul class="list-inline float-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left" onclick="overflow()" id="btn_mobile" stat="1">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>                        
                </ul>
            </nav>

        </div>
        <!-- End Navigation -->
      
     
        <!-- Left Sidebar -->
        <?php $this->load->view('template_navigation'); ?>
        <!-- End Sidebar -->

        <!-- Start content -->
        <?php @$this->load->view($page_content); ?>
        <!-- END content -->
        
        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="http://www.raharja-net.co.id/">PT Raharja Sinergi Komunikasi</a>
            </span>
        </footer>

    </div>
    <!-- END main -->

    <script src="<?php echo base_url('assets/js/modernizr.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/detect.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/fastclick.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.blockUI.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js') ?>"></script>

    <!-- App js -->
    <script src="<?php echo base_url('assets/js/pikeadmin.js') ?>"></script>

    <!-- modal, -->
    <script src="<?php echo base_url('assets/js/my_custom.js') ?>"></script>
    
    <!-- upload filter -->

    <script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery.filer/js/jquery.filer.min.js') ?>"></script>

    <script type="text/javascript">
        function overflow(){
            if($('#btn_mobile').attr('stat') == 1){
                $('#btn_mobile').attr('stat', '0');
                $('#sidebar').attr('style', 'overflow: unset !important;');
                $('#barcode').attr('style', 'display: none !important;');
            }else{
                $('#btn_mobile').attr('stat', '1');
                $('#sidebar').attr('style', 'overflow: auto !important;');
                $('#barcode').attr('style', 'display: block !important;');
            }
        }
    </script>
</body>
</html>