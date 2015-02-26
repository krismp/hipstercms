<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends FrontendController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->library('form_validation');
        $this->layout = 'layouts/session';
    }

    public function add()
    {
        $this->form_validation->set_rules($this->user->rules);

        if ($this->form_validation->run() == TRUE)
        {
            $user = $this->user->get_by($this->session_params());

            if ($user)
            {
                $this->session->set_userdata('user_session', array(
                    'user_id' => $user->id,
                    'logged_in' => TRUE,
                ));

                $this->session->set_flashdata('message', alert_success('Login Berhasil ! Selamat datang ' . $this->current_user->fullname));

                redirect('posts');
            }

            $this->session->set_flashdata('message', alert_danger('Invalid credentials, please try again'));
            
            redirect('sessions/add');
        }       

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function delete($id)
    {
        $this->session->unset_userdata('user_session');
        $this->session->set_flashdata('message', alert_info('Logout success!'));

        redirect('sessions/add');
    }

    private function session_params()
    {
        return array( 
            'username' => $this->input->post('username') ,
            'password' => hash('sha1', $this->input->post('password')),
        );
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */