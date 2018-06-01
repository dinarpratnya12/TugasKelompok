<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table merk
		$this->db->from("merk");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from merk"

		//menjoinkan category
		$this->db->join("category","merk.fk_id_category=category.id_category",'left');
		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}

	public function getCategory()
	{
		return $this->db->get('category')->result_array();
	}
	
	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("merk");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_merk' => $this->input->post('id_merk'),
			'nama_merk' => $this->input->post('nama_merk')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		/* eksekusi query insert into "merk" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("merk",$data);
	}

	public function updateData($id_merk)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_merk' => $this->input->post('id_merk'),
			'nama_merk' => $this->input->post('nama_merk')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id',$id);
		/*eksekusi update merk set $data from merk where id=$id
		jika berhasil return berhasil */
		if($this->db->update("merk",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id_merk)
	{
		//mengeset where id=$id
		$this->db->where('id_merk',$id_merk);
		/* eksekusi delete from merk where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("merk")){
			return "Berhasil";
		}
	}
}
