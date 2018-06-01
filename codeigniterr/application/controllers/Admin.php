<!-- 
1. Ganti Nama Class
2. Ganti Nama Model
3. Ganti kata admin menjadi nama table
4. Ganti rule form_validation
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model admin_m
		$this->load->model('Admin_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/admin" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada admin_m */
		$data['getData'] = $this->Admin_m->getData();
		// memanggil view 'admin/admin.php' dan diberi variable $data
		$this->load->view('admin/admin.php',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/tambah.php'); 	
	}

	public function aksitambah()
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama_admin','Name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'admin/tambah.php'
			$this->load->view('admin/tambah.php'); 
		}
		// jika kita sudah melalukan submit
		else{
			$nama_admin=$this->input->post('nama_admin');
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$data=array(
				'nama_admin' => $nama_admin,
				'username' => $username,
				'password' => $password

			);
			
			//memanggil fungsi insertData pada model
			$this->Admin_m->insertData($data,'admin');
			//redirect / pergi ke halaman 'admin'
			redirect('admin/index');
		}
	}

	/*$id adalah parameter
	contoh penggunakan admin/ubah/1 
	*/ 
	// public function ubah($id)
	// {
	// 	//load library form_validation
	// 	$this->load->library("form_validation");
	// 	/* aturan form validation 
	// 	- parameter 1 ('id') = ditujukan pada input yang name="id"
	// 	- parameter 2 ('ID') = untuk tampilan error
	// 	- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
	// 	*/
	// 	$this->form_validation->set_rules('nama_admin','Name','required');
	// 	$this->form_validation->set_rules('username','Brand','required');
	// 	$this->form_validation->set_rules('password','Price','required');

	// 	// intinya membuat warna error menjadi merah :D
	// 	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

	// 	//memberikan data berisi data yang sesuai dengan $id
	// 	$data['getData'] = $this->Admin_m->getDataWhereadmin_id($id)[0];

	// 	// if jika kita belum melakukan submit
	// 	if($this->form_validation->run()==FALSE){
	// 		//menampilkan view 'admin/ubah.php'
	// 		$this->load->view('admin/ubah',$data);
	// 	}
	// 	// jika kita sudah melalukan submit
	// 	else{
	// 		//memanggil fungsi insertData pada model
	// 		$this->Admin_m->updateData($id);
	// 		//redirect / pergi ke halaman 'admin'
	// 		redirect('admin');
	// 	}
	// }

function ubah($id){

	$where = array('admin_id' => $id);
	$data['admin'] = $this->Admin_m->edit_dataadmin($where,'admin')->result();
	$this->load->view('admin/ubah',$data);
	}

	function updateadmin(){

	$id = $this->input->post('admin_id');
	$nama_admin=$this->input->post('nama_admin');
	$username=$this->input->post('username');
	$password=$this->input->post('password');

 
		$data = array(
			'admin_id' =>$id,
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password
			);
 
	$where = array(
		'admin_id' => $id
	);
 
	$this->Admin_m->update_dataadmin($where,$data,'admin');
	redirect('admin');
}
	/*$id adalah parameter
	contoh penggunakan admin/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Admin_m->hapusData($id);
		redirect('admin');
	}
}
