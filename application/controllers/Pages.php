<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function blog() {
        $this->load->view('blog');
    }

	public function contact()
	{
		$this->load->view('contact');
	}
}
