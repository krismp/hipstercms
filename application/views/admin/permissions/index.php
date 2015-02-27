<!-- Main content -->
<section class="content">
    <?php 
    foreach ($controllers as $ctrl) {
        var_dump($ctrl);
    }
    ?>
    <div class="row">
        <div class="col-xs-12">

            <?php $this->load->view('admin/shared/notification'); ?>
            
        </div>
    </div>

</section><!-- /.content -->