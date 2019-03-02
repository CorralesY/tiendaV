<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));//cargo los helpers
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/footer');
	}
}
