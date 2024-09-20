<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Domain_reg extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('domain_reg');
		$this->load->view('footer');
	}
}
