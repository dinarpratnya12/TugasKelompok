<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('merk_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/merk" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada merk_m */
		$data['getData'] = $this->merk_m->getData();
		// memanggil view 'merk/merk.php' dan diberi variable $data
		$this->load->view('merk/merk.php',$data);
	}

	public function tambah()
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('id_merk','Name','required');
		$this->form_validation->set_rules('nama_merk','Price','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->merk_m->getCategory();

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'merk/tambah.php'
			$this->load->view('merk/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->merk_m->insertData();
			//redirect / pergi ke halaman 'merk'
			redirect('merk');
		}
	}

	/*$id adalah parameter
	contoh penggunakan merk/ubah/1 
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
		$this->form_validation->set_rules('id_merk','Name','required');
		$this->form_validation->set_rules('nama_merk','Price','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->merk_m->getCategory();
		
		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->merk_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'merk/ubah.php'
			$this->load->view('merk/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->merk_m->updateData($id);
			//redirect / pergi ke halaman 'merk'
			redirect('merk');
		}
	}

	/*$id adalah parameter
	contoh penggunakan merk/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->merk_m->hapusData($id);
		redirect('merk');
	}
}
