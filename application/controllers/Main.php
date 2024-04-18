<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('templates/header', $data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['page'] = 'about';
		$this->load->view('templates/header', $data);
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
}
