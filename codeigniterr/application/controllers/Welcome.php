<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

		// function __construct() {
		// parent::__construct();
		// //load model admin_m
		// $this->load->model('Admin_m');
		// //load helper form
		// $this->load->helper('form');	
	

	public function index()
	{
		$this->load->view('home2');
	}

	public function admin()
	{
		$data['getData'] = $this->Admin_m->getData();
		$this->load->view('admin/admin');
	}

	public function home2()
	{
		
	}

	public function Login()
	{
		$this->load->view('login');
	}

	public function Signin()
	{
		$this->load->view('signin');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */
