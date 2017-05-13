<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		//$this->load->view('isi');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/dashboard');
		$this->load->view('footer');
	}
	function profil()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/profil');
		$this->load->view('footer');
	}
	function pencarian()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/pencarian');
		$this->load->view('footer');
	}
	function pengaturan()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/pengaturan');
		$this->load->view('footer');
	}
}
