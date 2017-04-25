<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_project extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}

		
		public function getProject(){
			$query = $this->db->query("SELECT * FROM project");
			$result = $query->result_array();
			return $result;
		}
	}
?>