<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo site_url($this->router->fetch_class()) ?>"><?php echo ucfirst($this->router->fetch_class()) ?></a></li>
    <li class="active"><?php echo ucfirst($this->router->fetch_method()) ?></li>
</ol>