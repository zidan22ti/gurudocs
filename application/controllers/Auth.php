<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    function index()
    {
        if($this->session->userdata('email')) {
            redirect('dokumen');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password','trim|required', [
        'required' => 'Password Wajib di isi'
        ]);
        if($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view('auth/login');
            $this->load->view("layout/auth_footer");
        }else{
            $this->cek_login();
        }
    }

    function registrasi()
    {
        if($this->session->userdata('email')) {
            redirect('dokumen');
        }
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique'=>'Email ini sudah terdaftar!',
            'valid_email' => 'Email harus valid',
            'required'=>'Email harus wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[1]matches[password2]',
            [
                'matches'=>'Password tidak sama',
                'min_length'=>'Password terlalu pendek',
                'required'=>'Password harus diisi'
            ]

            );
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');
            if($this->form_validation->run() == false) {
                $data['title'] = 'Registration';
                $this->load->view('layout/auth_header', $data);
                $this->load->view('auth/registrasi');
                $this->load->view("layout/auth_footer");
            }else{
              $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => "User",
            'data_created' => date('d-F-Y')
              ];
              $this->userrole->insert($data);
              $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!
              Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
              redirect('auth');
            }
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role']=="Admin") {
                    redirect('dokumen');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message','<div class="mb-3 alert alert-danger" role="alert"><span class="fe fe-minus-circle fe-16 mr-2"></span>Email Tidak Valid</div>');
                        
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message','<div class="mb-3 alert alert-danger" role="alert"><span class="fe fe-minus-circle fe-16 mr-2"></span>Password Salah</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this ->session->unset_userdata('email');
        $this ->session->unset_userdata('role');
        $this ->session->set_flashdata('message','<div class="alert alert-succes!" role="alert">Berhasil Logout!</div>');
        redirect('auth');
    }
}

?>