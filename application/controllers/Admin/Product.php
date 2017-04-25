<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_history');
		$this->load->model('m_user');
		$this->load->model('m_merk');

		$this->load->library('encryption');

	}

	public function index()
	{	 
		if(isset($this->session->userdata['username'])){
			$this->load->view('admin/base/header');
			$data['product'] = $this->m_merk->type();
			$this->load->view('admin/product/product',$data,FALSE);
			$this->load->view('admin/base/footer');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function cartype(){
		
	if(isset($this->session->userdata['username'])){
			$this->load->view('admin/base/header');
			$data['type'] = $this->m_merk->type();
			$this->load->view('admin/product/cartype',$data,FALSE);
			$this->load->view('admin/base/footer');
	}
	else{
			$this->load->view('admin/login');
	}
		
	}
	public function cartypeinsert(){
		
		if($this->input->post("submitcar")){
		 $car_type = $this->input->post("car_type");
		 $this->m_merk->insertTipeCar($car_type);	
		}
		else{
			redirect('Admin','refresh');
		}
	}


	public function detail(){
		if(isset($this->session->userdata['username'])){
			$this->load->view('admin/base/header');
			$this->load->view('admin/product/cardetail');
			$this->load->view('admin/base/footer');
		}
	}
	public function submit(){
		//Get All Input From Product
		if($this->input->post('submit_product')){

			// $uploadFile = $this->input->post('uploadfile');
			$title  = $this->input->post('car_merk');
			$series = $this->input->post('car_type');
			$year   = $this->input->post('car_year');
			$description = $this->input->post('description');
			$seat = $this->input->post('car_seat');
			$tank_capacity = $this->input->post('car_tank');
			$tank_fuel= $this->input->post('car_fuel');
			$car_number = $this->input->post('car_number');

			// $car_type = array(
			// 	'name_type' => 'Toyota',
			// 	'description'=> 'toyota'
			// );
			$car = array(
				'name'=> $title,
				'id_type' =>$series,
				'seat_capacity'=>$seat,
				'tank_capacity'=>$tank_capacity,
				'description'=>$description,
				'fuel'=>$tank_fuel,
				'plate'=>$car_number
			);
			
			// $this->m_merk->insertTipeCar($car_type);
			$this->m_merk->insertCar($car);

			//upload All Picture
			
			// $car_picture = array(
			// 	'id_car' => $this->m_merk->getCar($title),
			// 	'src' => $uploadfile
			// );
			redirect('Admin','refresh');
		}

	}

	public function delete($delete = null,$id){

		if($delete == "cartype"){
			echo $delete;
			$this->m_merk->deletetipe($id);
		}
		else if($delete == "product"){
			echo $delete;
			$this->m_merk->deleteproduct($id);
		}
	}


}
?>
