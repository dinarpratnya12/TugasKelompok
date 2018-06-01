<!-- 
1. Ganti Nama Class
2. Ganti Nama Table find 'admin'
3. Ganti Primary Key find 'admin_id'
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table users
		$this->db->from("admin");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from admin"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereadmin_id($admin_id)
	{
		$this->db->select('*');
		$this->db->from("admin");
		$this->db->where('admin_id',$admin_id);
		return $this->db->get()->result_array();
	}

	public function insertData($data, $table)
	{
		$this->db->insert($table, $data);
	// 	/* jika semua sama sperti di table
	// 	gunakan versi simple seprti berikut */
	// 	$data = $this->input->post();
	// 	 eksekusi query insert into "admin" diisi dengan variable $data
	// 	face2face ae lek bingung :| 
	// 	$this->db->insert("admin",$data);
	}

	public function updateData($admin_id)	
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where user_id=$user_id
		$this->db->where('admin_id',$admin_id);
		/*eksekusi update admin set $data from admin where admin_id=$admin_id
		jika berhasil return berhasil */
		if($this->db->update("admin",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($admin_id)
	{
		//mengeset where admin_id=$admin_id
		$this->db->where('admin_id',$admin_id);
		/* eksekusi delete from admin where admin_id=$admin_id 
		jika berhasil return berhasil*/
		if($this->db->delete("admin")){
			return "Berhasil";
		}
	}

	public function edit_dataadmin($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}
 
	public function update_dataadmin($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
