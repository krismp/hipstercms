<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model {

	public $validate = array(
		array( 'field' => 'fullname',
               'label' => 'fullname',
               'rules' => 'required' ),
        array( 'field' => 'username', 
               'label' => 'username',
               'rules' => 'required|is_unique[users.username]' ),
        array( 'field' => 'email', 
               'label' => 'email',
               'rules' => 'required|valid_email|is_unique[users.email]' ),
        array( 'field' => 'password',
               'label' => 'password',
               'rules' => 'trim|required|matches[passconf]|md5|min_length[6]' ),
        array( 'field' => 'passconf',
               'label' => 'password confirmation',
               'rules' => 'trim|required' ),
        array( 'field' => 'gender',
               'label' => 'gender',
               'rules' => 'required' )
  );

  public $rules = array(
        array( 'field' => 'username', 
               'label' => 'username',
               'rules' => 'required' ),
        array( 'field' => 'password',
               'label' => 'password',
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

    public function login($username, $password)
    {
      $this->db->select('id, username, password');
      $this->db->from('users');
      $this->db->where('username', $username);
      $this->db->where('password', md5($password));
      $this->db->limit(1);

      $query = $this->db->get();

      if ($query->num_rows() == 1) {
        return $query->result();
      }else{
        return false;
      }
    }
}

/* End of file category_model.php */
/* Location: ./application/models/category_model.php */