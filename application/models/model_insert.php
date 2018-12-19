<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_insert extends CI_Model {

	public function insertData($table_nama,$data) {
		$insert = $this->db->insert($data,$table_nama);
		return $data;
	}
}
