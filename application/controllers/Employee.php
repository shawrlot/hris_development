<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
	}
	public function index(){
		$data['title'] = 'Employee';
		$data['active'] = 'employee';
		$data['filters'] = $this->employee_model->get_filter();
		$data['employees'] = $this->employee_model->get_employee();
		$this->load->view('employee_view',$data);
		echo "sample";
	}
}