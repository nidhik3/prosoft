<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_dev extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('product_dev');
		$this->load->view('footer');
	}
}
