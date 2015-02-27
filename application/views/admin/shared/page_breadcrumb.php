<?php 
    $class = $this->router->fetch_class();
    $method = $this->router->fetch_method();
?>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <!-- this one is not working -->
    <li><a href="<?php echo site_url('admin/'.$class);?>"><?php echo $page_alias; ?></a></li>
    <!-- end of this one is not working -->
    <li class="active"><?php echo ucwords($method); ?></li>
</ol>