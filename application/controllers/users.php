<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends AdminController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->data['users'] = $this->user->get_all();

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->user->validate);

        if ($this->form_validation->run() == TRUE)
        {
            $this->user->insert($this->user_params(), TRUE);

            $this->session->set_flashdata('message', alert_info('Data berhasil disimpan'));

            redirect('users');
        }       

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function edit($id)
    {
        $this->data['user'] = $this->user->get($id);

        $this->form_validation->set_rules($this->user->validate);

        if ($this->form_validation->run() == TRUE)
        {
            $this->user->update($id, $this->user_params(), TRUE);

            $this->session->set_flashdata('message', alert_info('Data berhasil diupdate'));

            redirect('users');
        }   

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function delete($id)
    {
        $this->user->delete($id);
        $this->session->set_flashdata('message', alert_info('Delete success!'));

        redirect('users');
    }

    private function user_params()
    {
        return array( 
            'fullname' => $this->input->post('fullname') ,
            'username' => $this->input->post('username') ,
            'email' => $this->input->post('email') ,
            'password' => hash('sha1', $this->input->post('password')),
            'gender' => $this->input->post('gender'),
        );
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */