<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Milestones extends CI_Controller
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
        $data['title'] = 'Admin - Milestones';
        $data['active'] = 'milestones';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['milestones'] = $this->modelAdmin->getAllMilestones();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/milestones/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addmilestones()
    {
        $data['title'] = 'Admin - Tambah Milestones';
        $data['active'] = 'milestones';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $data['tahun_list'] = range(date('Y'), 2000);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric|min_length[4]|max_length[4]');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/milestones/add_milestone', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {

            if (!empty($_FILES['image']['name'])) {
                $config['upload_path']   = './assets/vendor/landingpage/image/milestone/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = 'milestone-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning
                    $upload_data = [
                        'deskripsi'       => htmlspecialchars($input['deskripsi']),
                        'tahun' => htmlspecialchars($input['tahun']),
                        'image'       => $image,
                    ];

                    $this->modelAdmin->addMilestone($upload_data);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('milestones');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('milestones/addmilestones');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty!');
                redirect('milestones/addmilestones');
                return;
            }
        }
    }

    public function updatemilestones($id)
    {
        $data['title'] = 'Admin - Ubah Milestones';
        $data['active'] = 'milestones';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['milestones'] = $this->modelAdmin->getMilestoneById($id);

        $data['tahun_list'] = range(date('Y'), 2000);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric|min_length[4]|max_length[4]');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/milestones/edit_milestone', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {

            $old_image = $data['milestones']['image'];
            $ubahgambar = $_FILES['image']['name'];
            $id_milestone = $data['milestones']['id_milestone'];

            if ($ubahgambar) {
                $config['upload_path']   = './assets/vendor/landingpage/image/milestone/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = 'milestone-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/milestone/' . $old_image)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/milestone/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('milestones/updatemilestones/' . $id);
                    return;
                }
            } else {
                $new_image = $old_image;
            }

            $updateData = [
                'deskripsi'       => htmlspecialchars($this->input->post('deskripsi')),
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'image'       => $new_image,
            ];

            $this->modelAdmin->updateMilestone($id_milestone, $updateData);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('milestones');
        }
    }

    public function deletemilestones($id)
    {
        $data['milestones'] = $this->modelAdmin->getMilestoneById($id);
        $old_image = $data['milestones']['image'];

        if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/milestone/' . $old_image)) {
            unlink(FCPATH . 'assets/vendor/landingpage/image/milestone/' . $old_image);
        }

        $this->modelAdmin->deleteMilestone($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('milestones');
    }
}
