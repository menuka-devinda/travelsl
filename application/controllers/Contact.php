<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{
		$data['main_content'] = 'contact/index';
		$this-> load->view('layout',$data);
		//$this->load->view('welcome_message');
	}
	
}
