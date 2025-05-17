<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
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
        $data['title'] = 'Admin - Groups';
        $data['active'] = 'group';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['groups'] = $this->modelAdmin->getGroups();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/groups/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addgroups()
    {
        $data['title'] = 'Admin - Add Groups';
        $data['active'] = 'group';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('namagcomp', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('alamatperusahaan', 'Alamat Perusahaan', 'required|trim');
        $this->form_validation->set_rules('contactgcomp1', 'Contact Perusahaan 1', 'trim');
        $this->form_validation->set_rules('contactgcomp2', 'Contact Perusahaan 2', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/groups/add_group', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {
            if (!empty($_FILES['logo_gcomp']['name'])) {
                $config['upload_path']   = './assets/vendor/landingpage/image/groups/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['name']         = 'logo-gcomp' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo_gcomp')) {
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning
                    $upload_data = [
                        'nama_gcomp'     => htmlspecialchars($input['namagcomp']),
                        'alamat_group'   => htmlspecialchars($input['alamatperusahaan']),
                        'contactgroup_1' => htmlspecialchars($input['contactgcomp1']),
                        'contactgroup_2' => htmlspecialchars($input['contactgcomp2']),
                        'logo_gcomp'     => $image
                    ];
                    $this->modelAdmin->addGroups($upload_data);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('groups');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('groups/addgroups');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty!');
                redirect('groups/addgroups');
                return;
            }
        }
    }

    public function updategroups($id)
    {
        $data['title'] = 'Admin - Edit Groups';
        $data['active'] = 'group';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['group'] = $this->modelAdmin->getGroupById($id);

        $this->form_validation->set_rules('namagcomp', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('alamatperusahaan', 'Alamat Perusahaan', 'required|trim');
        $this->form_validation->set_rules('contactgcomp1', 'Contact Perusahaan 1', 'trim');
        $this->form_validation->set_rules('contactgcomp2', 'Contact Perusahaan 2', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/groups/edit_group', $data);
            $this->load->view('templates/footer_admin');
            return;
        } else {

            $old_image = $data['group']['logo_gcomp'];
            $logogcomp = $_FILES['logo_gcomp']['name'];
            $id_group = $data['group']['id_group'];

            if ($logogcomp) {
                $config['upload_path']   = './assets/vendor/landingpage/image/groups/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = 'logo-gcomp' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo_gcomp')) {
                    if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/groups/' . $old_image)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/groups/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('groups/updategroups/' . $id);
                    return;
                }
            } else {
                $new_image = $old_image;
            }

            $updateData = [
                'nama_gcomp'     => htmlspecialchars($this->input->post('namagcomp', true)),
                'alamat_group'   => htmlspecialchars($this->input->post('alamatperusahaan', true)),
                'contactgroup_1' => htmlspecialchars($this->input->post('contactgcomp1', true)),
                'contactgroup_2' => htmlspecialchars($this->input->post('contactgcomp2', true)),
                'logo_gcomp'     => $new_image
            ];

            $this->modelAdmin->updateGroup($id_group, $updateData);
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('groups');
        }
    }

    public function deletegroups($id)
    {
        $this->modelAdmin->deleteGroup($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('groups');
    }
}
