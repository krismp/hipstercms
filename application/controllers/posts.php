<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends AdminController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model', 'post');
		$this->load->model('category_model', 'category');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['posts'] = $this->post->get_all();

		$this->data['yield'] = $this->yield;

		$this->load->view($this->layout, $this->data);
	}

	public function add()
	{
		$this->data['categories'] = $this->category->get_all();

		$this->form_validation->set_rules($this->post->validate);

		if ($this->form_validation->run() == TRUE)
		{
			$this->post->insert($this->post_params(), TRUE);

			$this->session->set_flashdata('message', alert_info('Data berhasil disimpan'));

      		redirect('posts');
		}		

		$this->data['yield'] = $this->yield;

		$this->load->view($this->layout, $this->data);
	}

	public function edit($id)
	{
		$this->data['post'] = $this->post->get($id);

		$this->data['categories'] = $this->category->get_all();

		$this->form_validation->set_rules($this->post->validate);

		if ($this->form_validation->run() == TRUE)
		{
			$this->post->update($id, $this->post_params(), TRUE);

			$this->session->set_flashdata('message', alert_info('Data berhasil diupdate'));

      		redirect('posts');
		}	

		$this->data['yield'] = $this->yield;

		$this->load->view($this->layout, $this->data);
	}

	public function delete($id)
	{
		$this->post->delete($id);
		$this->session->set_flashdata('message', alert_info('Delete success!'));

		redirect('posts');
	}

	private function post_params()
	{
		return array( 
			'title' => $this->input->post('title') ,
			'category_id' => $this->input->post('category_id') ,
			'description' => $this->input->post('description') ,
			'body' => $this->input->post('body'),
			'tags' => $this->input->post('tags'),
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */