<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMasyarakat extends CI_Controller {


	public function index()
	{
		$this->berita['hasilbt'] = $this->model_show->getBerita('kirim_berita');
		$this->berita['hasillu'] = $this->model_show->getBerita('laporan');
		$this->load->view('homeMasyarakat',$this->berita);
	}
	

	public function insert() {
		$jenis_bencana = $this->input->post('jenis_bencana');
		$waktu = $this->input->post('waktu');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');

		$data = array(
			'jenis_bencana' => $jenis_bencana, 
			'waktu' => $waktu, 
			'kota' => $kota, 
			'provinsi' => $provinsi, 
			'deskripsi' => $deskripsi, 
			'gambar' => $gambar
		);

		$this->model_insert->insertData($data,'laporan');
		redirect('HomeMasyarakat/index');
		
	}
}
