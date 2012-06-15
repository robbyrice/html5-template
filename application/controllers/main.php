<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'	=>	'Main',
			'view'	=>	'main'
		);

		$this->load->view('templates/main', $data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */