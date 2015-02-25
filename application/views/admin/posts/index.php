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

            <?php $this->load->view('admin/shared/notification'); ?>

            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title btn-group">
                        <a href="<?php echo site_url($this->router->fetch_class() . '/add') ?>" class="btn btn-primary">
                            <i class="fa fa-plus"></i>&nbsp; Add New
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post) { ?>
                                <tr>
                                    <td><?php echo $post->title ?></td>
                                    <td><?php echo $post->author ?></td>
                                    <td><?php echo $post->category_id ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo site_url($this->router->fetch_class() . '/edit/' . $post->id) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo site_url($this->router->fetch_class() . '/delete/' . $post->id) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->

<?php echo $this->router->fetch_class(); ?>
<?php echo $this->router->fetch_method(); ?>