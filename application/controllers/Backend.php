<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('Web_2');
    }

	public function index()
	{
		$this->load->view('Admin/V_index');
	}

	public function data()
    {
        $join['test'] = $this->Web_2->Getdata();
        $this->load->view('Admin/Siswa', $join);
    }

    public function tambah()
	{
		$this->load->view('Admin/Tambah');
	}

	public function back()
    {
        $join['test'] = $this->Web_2->Getdata();
        $this->load->view('Admin/Siswa', $join);
    }

    public function save()
    {
       $no = $this->input->post('no');
       $nama = $this->input->post('nama');
       $nim = $this->input->post('nim');
       $alamat = $this->input->post('alamat');
       
       $data = array(
           'no' => $no,
           'nama' => $nama,
           'nim' => $nim,
           'alamat' => $alamat
       );
        ($data);
        $this->Web_2->save($data);
        redirect('Backend/data', 'refresh');
    }
}
