<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	function get_filter(){
		return $this->db->get('department')->result_array();
	}
	function get_employee(){
		return $this->db
					->join('department','employee.employee_department=department.department_id','left')
					->join('status','employee.employee_status=status.status_id','left')
					->get('employee')->result_array();
	}
	function view_employee(){

	}
	function add_employee($data){
		$this->db->insert('employee',$data);
	}


}