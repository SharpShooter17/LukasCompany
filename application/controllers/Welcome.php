<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		  parent::__construct();
		$this->load->library('Template');
	}

	public function index()
	{
		$this->template->write('title', 'Nazwa firmy');
		$this->template->write_view('menu', 'menu');
		$this->template->write_view('content', 'welcome_message');
		$this->template->write_view('footer', 'footer');
		$this->template->render();
	}
}
