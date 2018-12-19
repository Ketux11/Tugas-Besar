<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($email,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_masyarakat($email,$password){
        $query=$this->db->query("SELECT * FROM masyarakat WHERE email='$email' AND password=('$password') LIMIT 1");
        return $query;
    }
 
}
 