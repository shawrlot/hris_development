<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
	public function index() {
		$data['title'] = "Category";
		$this->load->view('header', $data);
		$this->load->view('sample_view');
		$this->load->view('footer');
	}

}

?>