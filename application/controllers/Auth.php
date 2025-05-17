<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect_if_logged_in();

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_auth');
            $this->load->view('auth/admin/index');
            $this->load->view('templates/footer_auth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pengguna', ['username' => $username])->row_array();

        if ($user) {

            // cek password
            if (password_verify($password, $user['sandi'])) {

                // kalau bener set session
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role_id']
                ];
                $this->session->set_userdata($data);

                // direct ke halaman
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('staff');
                }
            } else {
                $this->session->set_flashdata('logmess', 'Password salah!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('logmess', 'Username tidak ditemukan!');
            redirect('auth');
        }
    }

    public function blocked()
    {
        $this->load->view('404/index');
    }




    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        redirect('auth');
    }
}
