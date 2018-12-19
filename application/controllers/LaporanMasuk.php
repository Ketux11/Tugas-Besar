<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanMasuk extends CI_Controller {


	public function index()
	{
		$this->berita['hasil'] = $this->model_show->getBerita('laporan');
		$this->load->view('laporanMasuk',$this->berita);
	}

}
  