<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    protected $current_user;
    protected $page_alias;

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('user_model', 'user');

        $this->yield = 'admin/' . $this->router->fetch_class() . '/' . $this->router->fetch_method();
        $this->layout = 'admin/layouts/default';

        $this->data['current_user'] = $this->user->get_by(array(
            'id' => $this->session->userdata('user_session')['user_id']
        ));

        if (empty($this->data['current_user']))
        {
            $this->session->set_flashdata('message', alert_warning('Untuk mengakses halaman, silahkan login terlebih dahulu'));

            redirect('login');
        }
        else
        {
            $this->current_user = $this->data['current_user'];
        }

        if (is_null($this->page_alias))
        {
            $this->data['page_alias'] = ucwords($this->router->fetch_class());
        }
        else
        {
            $this->data['page_alias'] = ucwords($this->page_alias);
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */