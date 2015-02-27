<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups extends AdminController {

    public $has_many = array( 'users' );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('group_model', 'group');
    }

    public function index()
    {
        $this->data['groups'] = $this->group->get_all();

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules($this->group->validate);

        if ($this->form_validation->run() == TRUE)
        {
            $this->group->insert($this->group_params(), TRUE);

            $this->session->set_flashdata('message', alert_info('Data berhasil disimpan'));

            redirect('groups');
        }       

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function edit($id)
    {
        $this->data['group'] = $this->group->get($id);

        $this->load->library('form_validation');

        $this->form_validation->set_rules($this->group->validate);

        if ($this->form_validation->run() == TRUE)
        {
            $this->group->update($id, $this->group_params(), TRUE);

            $this->session->set_flashdata('message', alert_info('Data berhasil diupdate'));

            redirect('groups');
        }   

        $this->data['yield'] = $this->yield;

        $this->load->view($this->layout, $this->data);
    }

    public function delete($id)
    {
        $this->group->delete($id);
        $this->session->set_flashdata('message', alert_info('Delete success!'));

        redirect('groups');
    }

    private function group_params()
    {
        return array( 
            'name' => $this->input->post('name')
        );
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */