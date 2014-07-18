<?php

class Model extends CI_Model {

	function read_data($table, $reg_id) {
		$result = $this->db->get_where($table, array('regno' => $reg_id));
		return $result;
	}
}
?>