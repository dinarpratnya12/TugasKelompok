<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('transaksi_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/transaksi" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada transaksi_m */
		$data['getData'] = $this->transaksi_m->getData();
		// memanggil view 'transaksi/transaksi.php' dan diberi variable $data
		$this->load->view('transaksi/transaksi.php',$data);
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
		$this->form_validation->set_rules('id_transaksi','Name','required');
		$this->form_validation->set_rules('id_pelanggan','Price','required');
		$this->form_validation->set_rules('order_id','Brand','required');
		$this->form_validation->set_rules('message','Brand','required');
		$this->form_validation->set_rules('tgl_kirim','Brand','required');
		$this->form_validation->set_rules('tgl_terima','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->transaksi_m->getCategory();

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'transaksi/tambah.php'
			$this->load->view('transaksi/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->transaksi_m->insertData();
			//redirect / pergi ke halaman 'transaksi'
			redirect('transaksi');
		}
	}

	/*$id adalah parameter
	contoh penggunakan transaksi/ubah/1 
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
		$this->form_validation->set_rules('id_transaksi','Name','required');
		$this->form_validation->set_rules('id_pelanggan','Price','required');
		$this->form_validation->set_rules('order_id','Brand','required');
		$this->form_validation->set_rules('message','Brand','required');
		$this->form_validation->set_rules('tgl_kirim','Brand','required');
		$this->form_validation->set_rules('tgl_terima','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->transaksi_m->getCategory();
		
		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->transaksi_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'transaksi/ubah.php'
			$this->load->view('transaksi/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->transaksi_m->updateData($id);
			//redirect / pergi ke halaman 'transaksi'
			redirect('transaksi');
		}
	}

	/*$id adalah parameter
	contoh penggunakan transaksi/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->transaksi_m->hapusData($id);
		redirect('transaksi');
	}
}
