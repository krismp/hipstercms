<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends AdminController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model', 'post');
    }

    public function index()
    {
        $this->data['users'] = $this->user->get_all();
        $this->data['posts'] = $this->post->get_all();

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */