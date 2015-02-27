<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group_model extends MY_Model {

  public $_table = 'user_groups';

  public $validate = array(
    array( 'field' => 'name', 
           'label' => 'name',
           'rules' => 'required|is_unique[user_groups.name]' )
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

/* End of file group_model.php */
/* Location: ./application/models/group_model.php */