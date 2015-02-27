<div class="box-body">
    <div class="form-group <?php echo has_error_class('name'); ?>">
        <label for="name">Group Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($group->name) ? $group->name : set_value('name') ?>">
        <?php echo show_error_field('name'); ?>
    </div>
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url($this->router->fetch_class()) ?>" class="btn btn-default">
    Cancel
    </a>
</div>