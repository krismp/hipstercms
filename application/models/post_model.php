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

    public $before_create = array( 'created_at' );
    public $before_update = array( 'updated_at' );

    public function created_at($data)
    {
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');

        return $data;
    }

    public function updated_at($data)
    {
        $data['updated_at'] = date('Y-m-d H:i:s');

        return $data;
    }

}

/* End of file post_model.php */
/* Location: ./application/models/post_model.php */