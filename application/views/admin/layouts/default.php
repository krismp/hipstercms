<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Data Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/css/font-awesome.css" rel="stylesheet">
                
        <!-- Ionicons -->
        <link href="<?php echo base_url() ?>assets/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Dinamically load css assets for specific page -->
        <?php load_page_css(); ?>

        <!-- Theme style -->
        <link href="<?php echo base_url() ?>assets/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/shared/navbar'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <?php $this->load->view('admin/shared/sidebar'); ?>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo ucfirst($this->router->fetch_class()) ?>
                    </h1>
                    
                    <!-- Load breadcrumb dinamically -->
                    <?php 
                        if ($this->router->fetch_method() == 'index')
                        {
                            $this->load->view('admin/shared/index_breadcrumb');
                        }
                        else
                        {
                            $this->load->view('admin/shared/page_breadcrumb');
                        }
                    ?>
                    
                </section>

                <!-- YIELD -->
                <?php $this->load->view($yield); ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="<?php echo base_url() ?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Dinamically load JS assets for specific page -->
        <?php load_page_js(); ?>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/admin/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>assets/admin/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
