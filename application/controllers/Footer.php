<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
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
        $data['title'] = 'Admin - Footer';
        $data['active'] = 'footer';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['footerstatus'] = $this->modelAdmin->getFooterWithCompany();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/footer/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function ubahfooter($id)
    {
        $data['title'] = 'Admin - Ubah Footer';
        $data['active'] = 'footer';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['footerstatus'] = $this->modelAdmin->getFooterById($id);

        // Cek apakah request-nya POST atau GET
        if ($this->input->method() === 'post') {
            // Ambil status, default ke "off" kalau gak dicentang
            $status = $this->input->post('status') === 'on' ? 'on' : 'off';

            $this->modelAdmin->ubahFooter($id, $status);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('footer');
        } else {
            // Tampilkan form
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/footer/edit_footer', $data);
            $this->load->view('templates/footer_admin');
        }
    }
}
