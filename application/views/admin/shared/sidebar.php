<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/admin/img/avatar3.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hello, <?php echo $current_user->fullname ?></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li>
            <a href="<?php echo site_url('admin/dashboard') ?>">
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('admin/posts') ?>">
                <span>Posts</span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('admin/users') ?>">
                <span>Users</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <span>Access Control List</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/groups') ?>"><i class="fa fa-angle-double-right"></i> Group</a></li>
                <li><a href="<?php echo site_url('admin/permissions') ?>"><i class="fa fa-angle-double-right"></i> Permission</a></li>
            </ul>
        </li>
    </ul>
</section>