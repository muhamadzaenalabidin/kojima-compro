<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('modelAdmin');
        $this->load->model('modelLanding');
        $this->load->model('modelSession');
    }


    public function index()
    {
        $data['title'] = 'Admin - Dashboard';
        $data['active'] = 'dashboard';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer_admin');
    }


    // Pengguna

    public function pengguna()
    {
        $data['title'] = 'Admin - Pengguna';
        $data['active'] = 'pengguna';
        $data['pengguna'] = $this->modelAdmin->getAllPengguna();
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/pengguna/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambahPengguna()
    {
        $data['title'] = 'Admin - Tambah Pengguna';
        $data['active'] = 'pengguna';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]', [
            'is_unique' => 'Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('section', 'Section', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/pengguna/add_user');
            $this->load->view('templates/footer_admin');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'devisi' => $this->input->post('section'),
                'sandi' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'date_created' => time()
            ];

            $this->modelAdmin->insertPengguna($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/pengguna');
        }
    }

    public function editPengguna($id)
    {
        $data['title'] = 'Admin - Edit Pengguna';
        $data['active'] = 'pengguna';
        $data['pengguna'] = $this->modelAdmin->getPenggunaById($id);
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $old_username = $data['pengguna']['username'];
        $new_username = $this->input->post('username');
        $pass = $this->input->post('password1');

        // Validasi Username
        if ($old_username != $new_username) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]', [
                'is_unique' => 'Username tadi sudah digunakan!'
            ]);
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
        }

        // Validasi jika password diisi
        if (!empty($pass)) {
            $this->form_validation->set_rules('password1', 'Password', 'trim|min_length[6]|matches[password2]', [
                'matches' => 'Password tidak sama!',
                'min_length' => 'Password terlalu pendek!'
            ]);
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|matches[password1]');
        }

        // Validasi lainnya
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('section', 'Section', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/pengguna/edit_user', $data);
            $this->load->view('templates/footer_admin');
        } else {
            // Data yang akan diupdate
            $update = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'devisi' => $this->input->post('section'),
                'role_id' => $this->input->post('role'),
            ];

            // Jika password diisi, tambahkan ke data yang diupdate
            if (!empty($pass)) {
                $update['sandi'] = password_hash($pass, PASSWORD_DEFAULT);
            }

            $this->modelAdmin->updatePengguna($update, $this->input->post('id_user'));
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/pengguna');
        }
    }

    public function hapusPengguna($id)
    {
        $this->modelAdmin->deletePengguna($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/pengguna');
    }
}
