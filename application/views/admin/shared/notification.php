<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-info alert-dismissable">
    <i class="fa fa-info"></i>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $this->session->flashdata('message'); ?>
</div>
<?php } ?>