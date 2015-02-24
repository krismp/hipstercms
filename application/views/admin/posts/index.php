<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title btn-group">
                        <a href="<?php echo site_url($this->router->fetch_class() . '/add') ?>" class="btn btn-success">
                            <i class="fa fa-plus"></i>&nbsp; Add New
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->

<?php echo $this->router->fetch_class(); ?>
<?php echo $this->router->fetch_method(); ?>