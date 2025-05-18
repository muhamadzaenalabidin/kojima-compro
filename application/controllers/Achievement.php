<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Achievement extends CI_Controller
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

        $data['title'] = 'Admin - Archievement';
        $data['active'] = 'archievement';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['achievements'] = $this->modelAdmin->getAllAchievement();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/achievement/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addachieve()
    {
        $data['title'] = 'Admin - Add Archievement';
        $data['active'] = 'archievement';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $data['tahun_list'] = range(date('Y'), 2000);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('nama_ach', 'Nama Achivement', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/achievement/add_ach', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {

            $tambahachieve = $_FILES['image']['name'];

            if ($tambahachieve) {
                $config['upload_path']   = './assets/vendor/landingpage/image/achievement/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = 'achievement-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning

                    $tambah_data = [
                        'tahun' => htmlentities($input['tahun']),
                        'nama_ach' => htmlspecialchars($input['nama_ach']),
                        'deskripsi' => htmlspecialchars($input['deskripsi']),
                        'dokumen' => $image,
                    ];

                    // insert to database
                    $this->modelAdmin->addAchievement($tambah_data);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('achievement');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('achievement/addachieve');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty!');
                redirect('achievement/addachieve');
                return;
            }
        }
    }

    public function editachieve($id)
    {
        $data['title'] = 'Admin - Ubah Archievement';
        $data['active'] = 'archievement';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['ach'] = $this->modelAdmin->getAchievementById($id);

        $data['tahun_list'] = range(date('Y'), 2000);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('nama_ach', 'Nama Achivement', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/achievement/edit_ach', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {
            $old_dokumen = $data['ach']['dokumen'];
            $ubahgambar = $_FILES['image']['name'];
            $id_achieve = $data['ach']['id_ach'];

            if ($ubahgambar) {
                $config['upload_path']   = './assets/vendor/landingpage/image/achievement/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = 'achievement-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    if ($old_dokumen && file_exists(FCPATH . 'assets/vendor/landingpage/image/achievement/' . $old_dokumen)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/achievement/' . $old_dokumen);
                    }

                    $new_dokumen = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('achievement/editachieve/' . $id);
                    return;
                }
            } else {
                $new_dokumen = $old_dokumen;
            }

            $update_data = [
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'nama_ach' => htmlspecialchars($this->input->post('nama_ach')),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                'dokumen' => $new_dokumen,
            ];

            $this->modelAdmin->updateAchievement($id_achieve, $update_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('achievement');
        }
    }

    public function deleteachieve($id)
    {
        $data['achievement'] = $this->modelAdmin->getAchievementById($id);
        $old_dokumen = $data['achievement']['dokumen'];

        if ($old_dokumen && file_exists(FCPATH . 'assets/vendor/landingpage/image/achievement/' . $old_dokumen)) {
            unlink(FCPATH . 'assets/vendor/landingpage/image/achievement/' . $old_dokumen);
        }

        $this->modelAdmin->deleteAchievement($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('achievement');
    }
}
