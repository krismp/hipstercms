<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FrontendController extends CI_Controller
{
    protected $current_user;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');

        $this->yield = $this->router->fetch_class() . '/' . $this->router->fetch_method();
        $this->layout = 'layouts/default';

        $this->data['current_user'] = $this->user->get_by(array(
            'id' => $this->session->userdata('user_session')['user_id']
        ));
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */