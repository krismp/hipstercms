<div class="box-body">
    <div class="form-group <?php echo has_error_class('fullname'); ?>">
        <label for="fullname">Fullname</label>
        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo isset($user->fullname) ? $user->fullname : set_value('fullname') ?>">
        <?php echo show_error_field('fullname'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('gender'); ?>">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <?php echo show_error_field('gender'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('username'); ?>">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($user->username) ? $user->username : set_value('username') ?>">
        <?php echo show_error_field('username'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('email'); ?>">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($user->email) ? $user->email : set_value('email') ?>">
        <?php echo show_error_field('email'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('password'); ?>">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($user->password) ? $user->password : set_value('password') ?>">
        <?php echo show_error_field('password'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('passconf'); ?>">
        <label for="passconf">Password</label>
        <input type="password" class="form-control" id="passconf" name="passconf" value="<?php echo isset($user->passconf) ? $user->passconf : set_value('passconf') ?>">
        <?php echo show_error_field('passconf'); ?>
    </div>
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url($this->router->fetch_class()) ?>" class="btn btn-default">
    Cancel
    </a>
</div>