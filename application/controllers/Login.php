<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('login');
    }
 
    function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->login_model->auth_admin($email,$password);
 
        if($cek_admin->num_rows() > 0)
        { //jika login sebagai dosen
	        $data=$cek_admin->row_array();
	        $this->session->set_userdata('masuk',TRUE);
	         if($data['level']=='1'){ //Akses admin
	            $this->session->set_userdata('akses','1');
	            $this->session->set_userdata('ses_id',$data['email']);
	            $this->session->set_userdata('ses_nama',$data['nama_lengkap']);
	            redirect('LaporanMasuk');
                
 				}
 				else
                { //akses dosen
	                $this->session->set_userdata('akses','2');
	                $this->session->set_userdata('ses_id',$data['email']);
	                $this->session->set_userdata('ses_nama',$data['nama_lengkap']);
	                redirect('LaporanMasuk');
        		}
 
        }
        else
        { //jika login sebagai mahasiswa
	        $cek_masyarakat=$this->login_model->auth_masyarakat($email,$password);
	        if($cek_masyarakat->num_rows() > 0)
	        {
                $data=$cek_masyarakat->row_array();
        		$this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','3');
                $this->session->set_userdata('ses_id',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama_lengkap']);
                redirect('HomeMasyarakat');
                
	        }
	        else
	        {  // jika username dan password tidak ditemukan atau salah
                $url=base_url();
                echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                redirect('Login');
	        }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}

