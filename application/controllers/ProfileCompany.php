<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileCompany extends CI_Controller
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
        $data['title'] = 'Admin - Profile Prusahaan';
        $data['active'] = 'profile';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['profile'] = $this->modelAdmin->getProfile();

        $this->form_validation->set_rules('namacomp', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('alamatcomp', 'Alamat Perusahaan', 'required|trim');
        $this->form_validation->set_rules('contactcomp1', 'Kontak Perusahaan', 'trim');
        $this->form_validation->set_rules('contactcomp2', 'Kontak Perusahaan', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/profile/index', $data);
            $this->load->view('templates/footer_admin');
        } else {

            $old_image = $data['profile']['logo_comp'];
            $logocomp = $_FILES['logocomp']['name'];
            $id_comp = $data['profile']['id_comp'];

            if ($logocomp) {
                $config['upload_path'] = './assets/vendor/landingpage/image/logo/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['file_name'] = 'logo-' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logocomp')) {

                    if ($old_image  && file_exists(FCPATH . 'assets/vendor/landingpage/image/logo/' . $old_image)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/logo/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('profilecompany');
                    return;
                }
            } else {
                $new_image = $old_image;
            }

            $data = [
                'nama_comp' => htmlspecialchars($this->input->post('namacomp', true)),
                'alamat' => htmlspecialchars($this->input->post('alamatcomp', true)),
                'contact_1' => htmlspecialchars($this->input->post('contactcomp1', true)),
                'contact_2' => htmlspecialchars($this->input->post('contactcomp2', true)),
                'logo_comp' => $new_image,
            ];

            $this->modelAdmin->updateProfile($data, $id_comp);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('profilecompany');
        }
    }
}
