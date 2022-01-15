<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('UjianModel');
    }

	public function data()
    {
        $join['test'] = $this->UjianModel->Getdata();
        $this->load->view('Admin/Dosen', $join);
    }

    public function tambah()
	{
		$this->load->view('Admin/Tambah');
	}

	public function back()
    {
        $join['test'] = $this->UjianModel->Getdata();
        $this->load->view('Admin/Dosen', $join);
    }

    public function save()
    {
        $no  = $this->input->post('no');
       $id_soal = $this->input->post('id_soal');
       $dosen = $this->input->post('dosen');
       $jumlah_soal = $this->input->post('jumlah_soal');
       
       $data = array(
           'no' => $no,
           'id_soal' => $id_soal,
           'dosen' => $dosen,
           'jumlah_soal' => $jumlah_soal
       );
       if($this->UjianModel->save($data) === TRUE) {
        $msg = "Data Berhasil Di tambahkan";
        $this->session->set_flashdata('sukses', $msg);
        redirect('Ujian/data','refresh');            
       } 
    }

    public function destroy()
    {
        $this->session->sess_destroy();
        redirect('Ujian/data','refresh');
    }

    public function del()
    {
        $id = $this->input->post('no');
        $this->UjianModel->del($id);
        redirect('Ujian/data','refresh');
    }

    public function edit($no)
	{
        $data['edit'] = $this->UjianModel->getId($no);
		$data['test'] = $this->UjianModel->Getdata();
		$this->load->view('Admin/Edit', $data);
	}

	public function update()
	{
	$no = $this->input->post('no');
		$data = array(
			'no' => $no,
			'id_soal' => $this->input->post('id_soal'),
			'dosen' => $this->input->post('dosen'),
			'jumlah_soal' => $this->input->post('jumlah_soal')
		
		);
		$this->UjianModel->saveUpdate($data, $no);
		redirect('Ujian/data' ,'refresh' );
	}
}
