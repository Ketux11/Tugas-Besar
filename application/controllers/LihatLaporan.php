<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatLaporan extends CI_Controller {


	public function index()
	{
		$this->berita['hasil'] = $this->model_show->getBerita('laporan');
		$this->load->view('lihatLaporan',$this->berita);
	}

}
 