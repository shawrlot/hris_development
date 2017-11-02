<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class evaluation_model extends CI_MODEL {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function pin_check($pin){
		if ($pin_details = $this->db->where('pin_code',$pin)->get('pin')->result_array()){
			return $this->db->join('subject','load.load_subject=subject.subject_id')
					 ->join('employee','load_employee=employee_id')
					 ->join('department','employee_department=department.department_id')
					 ->join('pin','load_id=pin_load')
					 ->get('load')->result_array();
		}
		else{
			return false;
		}
	}
	public function create_session($data){
		$this->db->insert('session',array('session_pin'=>$data));
		return $this->db->insert_id();
	}
}