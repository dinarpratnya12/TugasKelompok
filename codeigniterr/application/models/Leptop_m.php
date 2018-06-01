<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leptop_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table Leptop
		$this->db->from("leptop");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from leptop"

		//menjoinkan category
		$this->db->join("category","leptop.fk_id_category=category.id_category",'left');
		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}

	public function getCategory()
	{
		return $this->db->get('category')->result_array();
	}
	
	public function getDataWhereId($id_leptop)
	{
		$this->db->select('*');
		$this->db->from("leptop");
		$this->db->where('id_leptop',$id_leptop);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_leptop' => $this->input->post('id_leptop'),
			'id_merk' => $this->input->post('id_merk'),
			'info' => $this->input->post('info'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'foto' => $this->input->post('foto')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		/* eksekusi query insert into "leptop" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("leptop",$data);
	}

	public function updateData($id_leptop)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_leptop' => $this->input->post('id_leptop'),
			'id_merk' => $this->input->post('id_merk'),
			'info' => $this->input->post('info'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'foto' => $this->input->post('foto')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id_leptop',$id_leptop);
		/*eksekusi update leptop set $data from leptop where id=$id
		jika berhasil return berhasil */
		if($this->db->update("leptop",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id_leptop)
	{
		//mengeset where id=$id
		$this->db->where('id_leptop',$id_leptop);
		/* eksekusi delete from Leptop where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("Leptop")){
			return "Berhasil";
		}
	}
}
