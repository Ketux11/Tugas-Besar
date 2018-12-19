<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_show extends CI_Model {

	public function getBerita($table_nama) 
	{
		$berita = $this->db->get($table_nama);
		return $berita->result_array();
	}
}
 