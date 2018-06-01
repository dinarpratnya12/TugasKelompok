<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leptop extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('leptop_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/leptop" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada leptop_m */
		$data['getData'] = $this->leptop_m->getData();
		// memanggil view 'leptop/leptop.php' dan diberi variable $data
		$this->load->view('leptop/leptop.php',$data);
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
		$this->form_validation->set_rules('id_leptop','Name','required');
		$this->form_validation->set_rules('id_merk','Price','required');
		$this->form_validation->set_rules('info','Brand','required');
		$this->form_validation->set_rules('harga','Brand','required');
		$this->form_validation->set_rules('stok','Brand','required');
		$this->form_validation->set_rules('foto','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->leptop_m->getCategory();

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'leptop/tambah.php'
			$this->load->view('leptop/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->leptop_m->insertData();
			//redirect / pergi ke halaman 'leptop'
			redirect('leptop');
		}
	}

	/*$id adalah parameter
	contoh penggunakan leptop/ubah/1 
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
		$this->form_validation->set_rules('id_leptop','Name','required');
		$this->form_validation->set_rules('id_merk','Price','required');
		$this->form_validation->set_rules('info','Brand','required');
		$this->form_validation->set_rules('harga','Brand','required');
		$this->form_validation->set_rules('stok','Brand','required');
		$this->form_validation->set_rules('foto','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->leptop_m->getCategory();
		
		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->leptop_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'leptop/ubah.php'
			$this->load->view('leptop/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->leptop_m->updateData($id);
			//redirect / pergi ke halaman 'leptop'
			redirect('leptop');
		}
	}

	/*$id adalah parameter
	contoh penggunakan leptop/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->leptop_m->hapusData($id);
		redirect('leptop');
	}
}
