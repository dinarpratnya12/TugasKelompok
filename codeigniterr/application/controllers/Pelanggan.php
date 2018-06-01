<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('Pelanggan_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/Pelanggan" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Pelanggan_m */
		$data['getData'] = $this->Pelanggan_m->getData();
		// memanggil view 'Pelanggan/Pelanggan.php' dan diberi variable $data
		$this->load->view('pelanggan/pelanggan.php',$data);
	}

	public function tambah()
	{
		$data = array();
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama_pelanggan','Name','required');
		$this->form_validation->set_rules('pass_pelanggan','Price','required');
		$this->form_validation->set_rules('email','Brand','required');
		$this->form_validation->set_rules('Alamat','Brand','required');
		$this->form_validation->set_rules('nomor_tlp','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		// $data['getCategory'] = $this->Pelanggan_m->getCategory();

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'Pelanggan/tambah.php'
			$this->load->view('login'); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Pelanggan_m->insertData();
			//redirect / pergi ke halaman 'Pelanggan'
			redirect('Pelanggan');
		}
	}

	/*$id adalah parameter
	contoh penggunakan Pelanggan/ubah/1 
	*/ 
	public function ubah($id)
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama_pelanggan','Name','required');
		$this->form_validation->set_rules('pass_pelanggan','Price','required');
		$this->form_validation->set_rules('email','Brand','required');
		$this->form_validation->set_rules('Alamat','Brand','required');
		$this->form_validation->set_rules('nomor_tlp','Brand','required');
		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->Pelanggan_m->getCategory();
		
		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Pelanggan_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'Pelanggan/ubah.php'
			$this->load->view('Pelanggan/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Pelanggan_m->updateData($id);
			//redirect / pergi ke halaman 'Pelanggan'
			redirect('Pelanggan');
		}
	}

	/*$id adalah parameter
	contoh penggunakan Pelanggan/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Pelanggan_m->hapusData($id);
		redirect('Pelanggan');
	}
}
