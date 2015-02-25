<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends MY_Model {

    public $has_many = array( 'posts' );

}

/* End of file category_model.php */
/* Location: ./application/models/category_model.php */