<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('evaluation_model');
	}
	public function index(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = 'Employee';
			$data['active'] = 'evaluation';
			$this->load->view('evaluation_view',$data);
		}
		else{
			$data['title'] = 'Evaluate Now';
		
			$this->load->view('evaluate_view',$data);
		}
		
	}
	public function start_evaluation(){
		$pin = $this->input->post('pin');
		if ($pin_details = $this->evaluation_model->pin_check($pin)){
			// var_dump($pin_details);
			$data['evaluation'] = $pin_details[0];
			$data['title'] = 'Step 2: Verify';
			$this->load->view('evaluation-start_view',$data);
		}
		else{
			header('location:/evaluation');
		}
	}
	public function create_session(){
		if ($x = $this->input->post('pin')) {
			$session_id = $this->evaluation_model->create_session($x);
			$this->session->set_userdata('evaluation',array('session_id'=>$session_id));
			header('location:/introduction');
		}
		else{
			header('location:/evaluation');
		}
	}
	public function session_introduction(){
		print_r($this->session->userdata('evaluation'));
	}

}