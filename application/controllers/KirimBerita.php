<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KirimBerita extends CI_Controller {

	public function index()
	{	
		$this->berita['hasil'] = $this->model_show->getBerita('kirim_berita');
		$this->load->view('KirimBerita');
	}

	public function insert() {
		$admin = $this->input->post('admin');
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$status = $this->input->post('status');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'admin' => $admin, 
			'judul' => $judul, 
			'tanggal' => $tanggal, 
			'waktu' => $waktu, 
			'provinsi' => $provinsi, 
			'kota' => $kota,
			'kecamatan' => $kecamatan, 
			'status' => $status, 
			'deskripsi' => $deskripsi, 
			'gambar' => $gambar, 
			'lokasi' => $lokasi
		);

		$this->model_insert->insertData($data,'kirim_berita');
		redirect('DaftarLaporan');
	}
}
