<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table transaksi
		$this->db->from("transaksi");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from transaksi"

		//menjoinkan category
		$this->db->join("category","transaksi.fk_id_category=category.id_category",'left');
		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}

	public function getCategory()
	{
		return $this->db->get('category')->result_array();
	}
	
	public function getDataWhereId($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from("transaksi");
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'order_id' => $this->input->post('order_id'),
			'message' => $this->input->post('message'),
			'tgl_kirim' => $this->input->post('tgl_kirim'),
			'tgl_terima' => $this->input->post('tgl_terima')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		/* eksekusi query insert into "transaksi" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("transaksi",$data);
	}

	public function updateData($id_transaksi)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'order_id' => $this->input->post('order_id'),
			'message' => $this->input->post('message'),
			'tgl_kirim' => $this->input->post('tgl_kirim'),
			'tgl_terima' => $this->input->post('tgl_terima')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id_transaksi',$id_transaksi);
		/*eksekusi update transaksi set $data from transaksi where id=$id
		jika berhasil return berhasil */
		if($this->db->update("transaksi",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id_transaksi)
	{
		//mengeset where id=$id
		$this->db->where('id_transaksi',$id_transaksi);
		/* eksekusi delete from transaksi where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("transaksi")){
			return "Berhasil";
		}
	}
}
