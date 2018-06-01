<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Transaksi_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table detail_transaksi
		$this->db->from("detail_transaksi");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from detail_transaksi"

		//menjoinkan category
		$this->db->join("category","detail_transaksi.fk_id_category=category.id_category",'left');
		
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
		$this->db->from("detail_transaksi");
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
			'order_id' => $this->input->post('order_id'),
			'username' => $this->input->post('username'),
			'id_barang' => $this->input->post('id_barang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah'),
			'status' => $this->input->post('status')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		/* eksekusi query insert into "detail_transaksi" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("detail_transaksi",$data);
	}

	public function updateData($id)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'order_id' => $this->input->post('order_id'),
			'username' => $this->input->post('username'),
			'id_barang' => $this->input->post('id_barang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah'),
			'status' => $this->input->post('status')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id',$id);
		/*eksekusi update detail_transaksi set $data from detail_transaksi where id=$id
		jika berhasil return berhasil */
		if($this->db->update("detail_transaksi",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id',$id);
		/* eksekusi delete from detail_transaksi where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("detail_transaksi")){
			return "Berhasil";
		}
	}
}
