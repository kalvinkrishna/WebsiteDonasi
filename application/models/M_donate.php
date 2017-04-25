<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donate extends CI_Model {

	
	public function loadData($data){
		$query = $this->db->query("SELECT * FROM project WHERE project_id='$data'");
		$result = $query->result_array();
		return $result;
	}
	public function insertData($donatur){
		$query = $this->db->insert('donatur',$donatur);
	}

}

/* End of file M_donate.php */
/* Location: ./application/models/M_donate.php */