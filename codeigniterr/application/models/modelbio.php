<?php
/**
* 
*/
class modelbio extends CI_Model
{
	public function getBiodata()
	{
		$mhs = $this->db->get('biodata');
		return $mhs;
	}

	public function mahasiswa($id) {
		return $this->db->get_where('biodata', array('id'=>$id));
	}
	
}
?>