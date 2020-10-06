<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	
	public function notfound()
	{
		$this->load->view('template/505.html');
	}
}
