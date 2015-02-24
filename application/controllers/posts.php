<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends AdminController {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['yield'] = $this->yield;

		$this->load->view($this->layout, $this->data);
	}

	public function add()
	{
		$this->data['yield'] = $this->yield;

		$this->load->view($this->layout, $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */