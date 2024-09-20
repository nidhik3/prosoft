<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_mail extends CI_Controller
{


	public function index()
	{
		if (empty($_POST)) {
			redirect(base_url());
		}

		// Storing google recaptcha response
		// in $recaptcha variable

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'contact.adledger@gmail.com';
		$config['smtp_pass'] = 'ottxbxionpddrcmb';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->email->initialize($config);

		$from = $_POST['email'];
		 $to = 'contact.adledger@gmail.com';
		// $to = 'team@intercharge.in';

		$subject = 'ADLedger Contact';
		$message = 'Hello Team, <br /> You have a Subscribe request on ADLedger Portal. <br />';
		unset($_POST['g-recaptcha-response']);

		foreach ($_POST as $key => $value) {
			$message = $message . $key . '- ' . $value . '<br>';
		}



		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();
		redirect(base_url(''));

	}




}