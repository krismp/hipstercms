<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permissions extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['controllers'] = list_all_controllers_except(array('dashboard', 'permissions'));

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */