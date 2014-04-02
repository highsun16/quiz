<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('post');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
