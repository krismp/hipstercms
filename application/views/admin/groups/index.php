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
                                <th>Group Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($groups as $group) { ?>
                                <tr>
                                    <td><?php echo $group->name ?></td>
                                    <td>
                                        <?php echo action_buttons($group->id) ?>
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