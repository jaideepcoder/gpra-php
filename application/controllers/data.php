<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {
	
	function Data() {
		parent::__construct();
		$this->load->model('model');
	}
	
	function allotment($reg_no) {
		$output = array();
		$count = 0;
		$result = $this->model->read_data('allotment', $reg_no);
		foreach ($result->result() as $row) {
			$output[$count] = array($row);
			$count++;
		}
		echo json_encode($result->result());
	}
	
	function waiting($reg_no) {
		$output = array();
		$count = 0;
		$result = $this->model->read_data('waiting', $reg_no);
		foreach ($result->result() as $row) {
			$output[$count] = array($row);
			$count++;
		}
		echo json_encode($result->result());
	}
	
	function registration($reg_no) {
		$output = array();
		$count = 0;
		$result = $this->model->read_data('registration', $reg_no);
		foreach ($result->result() as $row) {
			$output[$count] = array($row);
			$count++;
		}
		echo json_encode($result->result());
	}
}

?>
