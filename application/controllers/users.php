<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends AdminController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('group_model', 'group');
    }

    public function index()
    {
        $this->data['users'] = $this->user->get_all();

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function add()
    {
        $this->data['groups'] = $this->group->get_all();

        $this->load->library('form_validation');

        $this->form_validation->set_rules($this->user->create_rules);

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
        $this->data['groups'] = $this->group->get_all();
        
        $this->data['user'] = $this->user->get($id);

        $this->load->library('form_validation');

        $this->form_validation->set_rules($this->user->edit_rules);

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
            'group_id' => $this->input->post('group_id') ,
            'fullname' => $this->input->post('fullname') ,
            'username' => $this->input->post('username') ,
            'email' => $this->input->post('email') ,
            'password' => hash('sha1', $this->input->post('password')),
            'gender' => $this->input->post('gender'),
        );
    }

    public function check_username($username)
    {
        $user = $this->user->get_by(array(
            'id !=' => $this->uri->segment(3),
            'username' => $username
        ));

        if ($user)
        {
            $this->form_validation->set_message(
                'check_username',
                'Sorry, This username is already used by another user please select another one'
            );

            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function check_email($email)
    {
        $user = $this->user->get_by(array(
            'id !=' => $this->uri->segment(3),
            'email' => $email
        ));

        if ($user)
        {
            $this->form_validation->set_message(
                'check_email',
                'Sorry, This email is already used by another user please select another one'
            );

            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */