<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarLaporan extends CI_Controller {

	public function index()
	{
		$this->berita['hasil'] = $this->model_show->getBerita('kirim_berita');
		$this->load->view('daftarLaporan', $this->berita);
	}


}
