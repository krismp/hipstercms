<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo ucfirst($this->router->fetch_method()) ?>
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url($this->router->fetch_class()) ?>"><?php echo ucfirst($this->router->fetch_class()) ?></a></li>
        <li class="active"><?php echo ucfirst($this->router->fetch_method()) ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open('users/edit/' . $user->id, array('role' => 'form')); ?>
                    
                    <?php $this->load->view('admin/' . $this->router->fetch_class() . '/_form'); ?>

                <?php echo form_close(); ?>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->