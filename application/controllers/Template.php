<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/footer.php');
	}
}
