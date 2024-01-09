<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dokumen_model');
    }

    public function index()

    {
        $data['judul'] = "halaman dokumen";
        $data['dokumen'] = $this->dokumen_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("dokumen/vw_dokumen", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()

    {
        $data['judul'] = "Halaman Tambah Dokumen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'judul', 'required', [
            'required' => 'Judul Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required', [
            'required' => 'deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('file', 'file', 'required', [
            'required' => 'file Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("dokumen/vw_tambah_dokumen", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'file' => $this->input->post('file'),
            ];
            $this->dokumen_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Data Dokumen Berhasil Ditambah!</div>');
            redirect('Dokumen');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "halaman detail dokumen";
        $data['dokumen'] = $this->dokumen_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("dokumen/vw_detail_dokumen", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->dokumen_model->delete($id);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data Dokumen Berhasil Dihapus!</div>');
        redirect('dokumen');
    }
    public function edit($id)
	{
		$data['judul'] = "Halaman Edit Dokumen";
		$data['dokumen'] = $this->dokumen_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'judul', 'required', [
            'required' => 'Judul Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required', [
            'required' => 'deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('file', 'file', 'required', [
            'required' => 'file Wajib di isi'
        ]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("layout/header",$data);
			$this->load->view("dokumen/vw_ubah_dokumen", $data);
			$this->load->view("layout/footer",$data);
		} else {
			$data=[
				'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'file' => $this->input->post('file'),
			];
			$id = $this->input->POST('id');
			$this->dokumen_model->update(['id' => $id],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Mahasiswa Berhasil Diubah!</div>');
			redirect('Dokumen');
	}
}
}