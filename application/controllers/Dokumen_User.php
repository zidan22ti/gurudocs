<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dokumen_user extends CI_Controller
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
        $this->load->view("dokumen_user/vw_dokumen_user", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function detail($id)
    {
        $data['judul'] = "halaman detail dokumen";
        $data['dokumen'] = $this->dokumen_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("dokumen_user/vw_detail_dokumen", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function unduh($dokumen_id)
    {
    $dokumen = $this->dokumen_model->getDokumenById($dokumen_id);

    $file_path = FCPATH . 'C:/' . $dokumen['file'];

    header('Content-Type: application/octet-stream');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    ob_clean();
    flush();
    readfile($file_path);
    exit;
}

}
