<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tender extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('M_Pemilihan');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$data["all"] = $this->M_Pemilihan->getAlldata();
		$this->load->view('welcome_message',$data);
	}
	
}
