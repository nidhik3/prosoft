<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_dev extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('web_dev');
		$this->load->view('footer');
	}
}
