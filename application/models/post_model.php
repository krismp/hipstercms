<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends MY_Model {

    public $belongs_to = array( 'category' );

  	public $validate = array(
        array( 'field' => 'title', 
               'label' => 'title',
               'rules' => 'required|is_unique[posts.title]' ),
        array( 'field' => 'description',
               'label' => 'description',
               'rules' => 'required' ),
        array( 'field' => 'body',
               'label' => 'body',
               'rules' => 'required' ),
        array( 'field' => 'tags',
               'label' => 'tags',
               'rules' => 'required' )
    );

}

/* End of file post_model.php */
/* Location: ./application/models/post_model.php */