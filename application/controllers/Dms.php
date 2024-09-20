<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dms extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('dms');
		$this->load->view('footer');
	}
}
