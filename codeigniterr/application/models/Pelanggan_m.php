<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table pelanggan
		$this->db->from("pelanggan");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from pelanggan"

		//menjoinkan category
		// $this->db->join("category","pelanggan.fk_id_category=category.id_category",'left');
		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}

	// public function getCategory()
	// {
	// 	return $this->db->get('category')->result_array();
	// }
	
	public function getDataWhereId($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from("pelanggan");
		$this->db->where('id_pelanggan',$id_pelanggan);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_pelanggan' => ' ',
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'pass_pelanggan' => $this->input->post('pass_pelanggan'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'nomor_tlp' => $this->input->post('nomor_tlp'),
			'level' => 'pelanggan');
			$this->db->insert('pelanggan',$data);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		//$data = $this->input->post();
		/* eksekusi query insert into "pelanggan" diisi dengan variable $data
		face2face ae lek bingung :| */
		
	}

	public function updateData($id_pelanggan)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'pass_pelanggan' => $this->input->post('pass_pelanggan'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'nomor_tlp' => $this->input->post('nomor_tlp')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id_pelanggan',$id_pelanggan);
		/*eksekusi update pelanggan set $data from pelanggan where id=$id
		jika berhasil return berhasil */
		if($this->db->update("pelanggan",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id_pelanggan)
	{
		//mengeset where id=$id
		$this->db->where('id_pelanggan',$id_pelanggan);
		/* eksekusi delete from pelanggan where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("pelanggan")){
			return "Berhasil";
		}
	}
}
