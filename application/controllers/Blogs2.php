<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs2 extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('blog2');
		$this->load->view('footer');
	}
}
