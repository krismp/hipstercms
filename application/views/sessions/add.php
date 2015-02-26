<div class="form-box" id="login-box">

    <?php $this->load->view('admin/shared/notification') ?>

    <div class="header">Sign In</div>
    <?php echo form_open('', array('autocomplete' => 'off')); ?>
        <div class="body bg-gray">
            <div class="form-group <?php echo has_error_class('username'); ?>">
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
                <?php echo show_error_field('username'); ?>
            </div>
            <div class="form-group <?php echo has_error_class('password'); ?>">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
                <?php echo show_error_field('password'); ?>
            </div>
        </div>
        <div class="footer">                                                               
            <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
        </div>
    <?php echo form_close(); ?>
</div>