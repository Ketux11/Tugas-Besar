<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarMasyarakat extends CI_Controller {
 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('daftarMasyarakat');
	}

		public function insert() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');
		$kodepos = $this->input->post('kodepos');

		$data = array(
			'email' => $email, 
			'password' => $password, 
			'nama_lengkap' => $nama_lengkap, 
			'alamat' => $alamat, 
			'kota' => $kota, 
			'negara' => $negara,
			'kodepos' => $kodepos
		);

		$this->model_insert->insertData($data,'masyarakat');
		redirect('Login');
		
	}
}
