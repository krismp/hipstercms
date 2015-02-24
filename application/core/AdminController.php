<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->yield = 'admin/' . $this->router->fetch_class() . '/' . $this->router->fetch_method();
        $this->layout = 'admin/layouts/default';
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */