<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	//Untuk Menghubungkan Database//
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

	public function index()
	{
		$this->load->view('Welcome_message');
	}

    public function login()
	{
		$this->load->view('Admin/Login');
	}
		//Logic Login //
    public function loginn()
	{
		$username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
		//Mengecek username dan pasword
        $cek_login = $this->M_login->cek_login($username , $password);

        if($cek_login->num_rows() > 0)
        {
            $data = $cek_login->row_array();
            $user = $data['user_name'];
            $id_user = $data['no'];
            $sesdata = array(
                'user_name' => $user,
                'no' => $id_user
            );
            $this->session->set_userdata($sesdata);
			// Ketika Berhasil masuk Ke kelass....//
            redirect('Ujian/data');
        }else{
			// Ketika Username dan password salah kembali ke View login //
            $msg = "Username dan Password Salah";
			$this->session->set_flashdata('error', $msg);
            redirect('Login/login');
        }
        
	}
	// Logic Logout//
	public function logout()
	{
		$this->session->sess_destroy();//ketika logout semua data di hapus dan kembali ke halaman login//
		redirect('Login/login','refresh');
	}
}