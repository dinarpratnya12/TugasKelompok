<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Transaksi extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('Detail_Transaksi_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/detail_transaksi" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada detail_transaksi_m */
		$data['getData'] = $this->Detail_Transaksi_m->getData();
		// memanggil view 'detail_transaksi/detail_transaksi.php' dan diberi variable $data
		$this->load->view('detail_transaksi/detail_transaksi.php',$data);
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
		$this->form_validation->set_rules('order_id','Name','required');
		$this->form_validation->set_rules('username','Price','required');
		$this->form_validation->set_rules('id_barang','Brand','required');
		$this->form_validation->set_rules('merk','Brand','required');
		$this->form_validation->set_rules('harga','Brand','required');
		$this->form_validation->set_rules('jumlah','Brand','required');
		$this->form_validation->set_rules('status','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->Detail_Transaksi_m->getCategory();

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'detail_transaksi/tambah.php'
			$this->load->view('detail_transaksi/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Detail_Transaksi_m->insertData();
			//redirect / pergi ke halaman 'detail_transaksi'
			redirect('detail_transaksi');
		}
	}

	/*$id adalah parameter
	contoh penggunakan detail_transaksi/ubah/1 
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
		$this->form_validation->set_rules('order_id','Name','required');
		$this->form_validation->set_rules('username','Price','required');
		$this->form_validation->set_rules('id_barang','Brand','required');
		$this->form_validation->set_rules('merk','Brand','required');
		$this->form_validation->set_rules('harga','Brand','required');
		$this->form_validation->set_rules('jumlah','Brand','required');
		$this->form_validation->set_rules('status','Brand','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		// mengambil data category
		$data['getCategory'] = $this->detail_transaksi_m->getCategory();
		
		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->detail_transaksi_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'detail_transaksi/ubah.php'
			$this->load->view('detail_transaksi/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->detail_transaksi_m->updateData($id);
			//redirect / pergi ke halaman 'detail_transaksi'
			redirect('detail_transaksi');
		}
	}

	/*$id adalah parameter
	contoh penggunakan detail_transaksi/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->detail_transaksi_m->hapusData($id);
		redirect('detail_transaksi');
	}
}
