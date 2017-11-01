<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {

	public function index(){
		$data['title'] = 'Employee';
		$data['active'] = 'evaluation';
		$this->load->view('evaluation_view',$data);
	}
}