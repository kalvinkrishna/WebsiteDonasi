<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_merk extends CI_Model {

	private $serries;
	private $year;
	private $color = [];

	public function getMerk($brand){

		$query = "SELECT * FROM m_product,m_merk WHERE m_product LEFT JOIN m_merk ";
	}

	public function insertCar($car){
		$query = $this->db->insert('m_car', $car);
	}
	public function insertTipeCar($cartype){
		//cekdulu tipenya ada atau tidak
		if($this->cekTipe($cartype) == 0){
			$car_type = array(
				'name_type' => $cartype,
				'description'=> ''
			);
		$query = $this->db->insert('m_car_type',$car_type);
			//return $query;
			redirect('Admin','refresh');
		}
		else{
			//nothing to do.
		}
	}
	private function cekTipe($cartype){
		$cars = $cartype;
		$query = $this->db->query("SELECT name_type FROM m_car_type WHERE name_type= '$cars'");
		return $query->row_array();
	}

	public function type(){
		$query = $this->db->query("SELECT * FROM m_car_type");
		$result = $query->result_array();
		return $result;
	}

	public function product(){
		$query = $this->db->query("SELECT * FROM m_car");
		$result = $query->result_array();
		return $result;
	}
	public function deletetipe($id){
		echo "tipe";
		$this->db->where('id_car_type',$id);
		$this->db->delete('m_car_type');			
	}
	public function deleteproduct($id){
		echo "product";
		$this->db->where('id_car',$id);
		$this->db->delete('m_car');
	}
}

/* End of file M_merk.php */
/* Location: ./application/models/M_merk.php */