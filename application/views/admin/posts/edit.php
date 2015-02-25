<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        General Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
                <?php echo form_open('', array('role' => 'form')); ?>
                    <div class="box-body">
                        <div class="form-group <?php echo has_error_class('title'); ?>">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                            <?php echo show_error_field('title'); ?>
                        </div>
                        <div class="form-group <?php echo has_error_class('category_id'); ?>">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                <?php } ?>
                            </select>
                            <?php echo show_error_field('category_id'); ?>
                        </div>
                        <div class="form-group <?php echo has_error_class('description'); ?>">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                            <?php echo show_error_field('description'); ?>
                        </div>
                        <div class="form-group <?php echo has_error_class('body'); ?>">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control" id="body" rows="5"></textarea>
                            <?php echo show_error_field('body'); ?>
                        </div>
                        <div class="form-group <?php echo has_error_class('tags'); ?>">
                            <label for="tags">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags">
                            <?php echo show_error_field('tags'); ?>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo site_url($this->router->fetch_class()) ?>" class="btn btn-default">
                        Cancel
                        </a>
                    </div>
                <?php echo form_close(); ?>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->