<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		$this->load->model('m_donate');
		
		 $this->load->library('email');
   		 $this->load->library('parser');
	}
	public function index()
	{	
		//$this->load->view('calvinkrishna1');	
	}	

	public function donasi($id){
		$data['id'] = $id;
	                 
     

		$data['projectDetail'] = $this->m_donate->loadData($id);

		$sessiondata = array(
            'donateItem' => $id,
            'nama_kegiatan' => $data['projectDetail'][0]['nama_project']
        );

        $this->session->set_userdata($sessiondata);
     //   echo $sessiondata['nama_kegiatan'];
		$this->load->view('calvinkrishna1', $data);		
	}

	private function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	public function doDonate(){

		

		$donationID = $this->generateRandomString();
		$donatefor= $this->input->post('donate_for');
		//echo $donatefor;
		$firstname= $this->input->post('donation_FistName');
		$lastname = $this->input->post('donation_LastName');
		$phone = $this->input->post('donation_userPhone');
		$email = $this->input->post('donation_userEmail');
		//echo $email;
		$address = $this->input->post('donation_address');
		$note = $this->input->post('donation_add_note');
		
		$donation = "";
		$dontext= $this->input->post('donation');
		$doncheck= $this->input->post('donationcheck');



		if($dontext==""){
			$donation = $doncheck;
		}
		else{
			$donation= $dontext;
		}

		$donate = Array(
			"id_project_yg_dipilih" => $this->session->userdata['donateItem'],
			"jenis_donasi" => $donatefor,
			"nominal_donasi" => $donation,
			"cash_transfer" => "30",
			"nama_donatur" => $firstname." ".$lastname,
			"no_hp_donatur" => $phone,
			"email_donatur" => $email
		);

		$this->sendEmail($firstname,$lastname,$email,$donatefor,$donation,$donationID,$donate);


		
	}

	public function sendEmail($firstname,$lastname,$emails,$donatefor,$donasi,$donationID,$donate){
		  $config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'krishna.kalvin@gmail.com', 
			  'smtp_pass' => 'kalvin180195', 
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);


		   $this->load->library('email', $config);
		   $this->email->initialize($config);
		   $this->email->set_newline("\r\n");
		   $this->email->from('krishna.kalvin@gmail.com');
		   $this->email->to($emails);
		   $this->email->subject('Laporan Donasi');

		   //$kegiatan = $this->session->userdata['nama_kegiatan'];
		   //echo $kegiatan;
		    $massage = "Selamat Kepada Bapak ".$firstname." ".$lastname." "."Donasi Anda dengan No. ID: ".$donationID." untuk membantu ".$donatefor." untuk kegiatan ".$kegiatan." Telah Berhasil";

		      $this->email->message($massage);
		    if($this->email->send())
		     {
		      	//echo 'Email send.';

				$this->m_donate->insertData($donate);
				redirect('Donate/donasi/'.$donate['id_project_yg_dipilih'],'refresh');
		     }
		     else
		    {
		    	$data["sessionID"] =$this->session->userdata['donateItem'];
		    	$this->load->view('eror_email',$data);
		    }
        
	}


}

/* End of file Donate.php */
/* Location: ./application/controllers/Donate.php */