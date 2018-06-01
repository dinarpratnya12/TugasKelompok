<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

	public function index()
	{
		$this->load->model('Biodata_model');
		$data['records'] = $this->Biodata_model->getBiodataQueryObject();
		$this->load->view('biodata/biodata.php',$data);
	}
	public function addForm()
	{
		$this->load->helper('form');
		$this->load->view('biodata/add.php');
	}
	public function addAction()
	{
		$this->load->model('Biodata_model');
		$data = array(
			"id" => $this->input->post('id'),
			"nama" => $this->input->post('nama'),
			"nim" => $this->input->post('nim'),
			"alamat" => $this->input->post('alamat')
			);
		$this->Biodata_model->insertData($data);
		redirect('Biodata');
	}
	public function updateForm($id)
	{
		$this->load->helper('form');
		$this->load->model('Biodata_model');
		$data['records'] = $this->Biodata_model->getDataWhereId($id);
		$this->load->view('biodata/update.php',$data);
	}
	public function updateAction()
	{
		$this->load->model('Biodata_model');
		$data = array(
			"id" => $this->input->post('id'),
			"nama" => $this->input->post('nama'),
			"nim" => $this->input->post('nim'),
			"alamat" => $this->input->post('alamat')
			);
		$id_old= $this->input->post('id_old');
		$this->Biodata_model->updateData($data,$id_old);
		redirect('Biodata');
	}
	public function deleteAction($id)
	{
		$this->load->model('Biodata_model');
		$this->Biodata_model->deleteData($id);
		redirect('Biodata');
	}

//dengan upload foto upload dan insert,update
	public function upload(){
	$config['upload_path'] = './foto/'; //definisi folder yg telah dibuat di root project
	$config['allowed_types'] = 'jpg|png|jpeg';
	$config['max_size'] = '2048';
	$config['remove_space'] = TRUE;
	$this->load->library('upload', $config); // Load konfigurasi uploadnya
	if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
	// Jika berhasil :
		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		return $return;
	}else{
	// Jika gagal :
		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		return $return;
	}
}

public function insertBiodata($upload) {
	$dataorg = array(
		'id' => $this->input->post('id'),
		'nama' => $this->input->post('nama'),
		'nim' => $this->input->post('nim'),
		'alamat' => $this->input->post('alamat'),
		'foto' => $upload['file']['file_name']);
	$this->db->insert('biodata', $dataorg);
	redirect('Welcome/information');
}

//getid,gambar,ubah untuk edit biodata
public function getid($id){
	$this->db->where('id', $id);
	return $this->db->get('biodata')->result();
}
public function gambar($id)
{
	$this->db->where('id', $id);
	return $this->db->get('biodata')->row();
}
public function ubah($id, $data) {
	try{
		$this->db->where('id',$id)->limit(1)->update('biodata', $data);
		return true;
	}catch(Exception $e){}
}

//untuk pagination jumlah data dan data, 
function jumlah_data()
{
	return $this->db->get('biodata')->num_rows();
}

function data($number,$offset)
{
	return $query = $this->db->get('biodata',$number,$offset)->result();
}
}
