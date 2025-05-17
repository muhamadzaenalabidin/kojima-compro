<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
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
        $data['title'] = 'Admin - Kelola Customers';
        $data['active'] = 'customers';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['customers'] = $this->modelAdmin->getAllCustomers();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/customers/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambahcust()
    {
        $data['title'] = 'Admin - Tambah Customers';
        $data['active'] = 'customers';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('namacust', 'Nama Customers', 'required|trim');
        $this->form_validation->set_rules('alamatcust', 'Alamat Customers', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/customers/add_cust');
            $this->load->view('templates/footer_admin');
        } else {

            if (!empty($_FILES['logo_cust']['name'])) {

                $config['upload_path'] = './assets/vendor/landingpage/image/cust/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = 'customers-' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo_cust')) {
                    // jika berhasil upload
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning
                    $dataInsert = [
                        'nama_cust' => htmlspecialchars($input['namacust']),
                        'alamat_cust' => htmlspecialchars($input['alamatcust']),
                        'logo_cust' => $image,
                    ];

                    $this->modelAdmin->insertCustomers($dataInsert);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('customers');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('customers/tambahcust');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty');
                redirect('customers/tambahcust');
            }
        }
    }

    public function editcustomers($id_cust)
    {
        $data['title'] = 'Admin - Edit Customers';
        $data['active'] = 'customers';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['cust'] = $this->modelAdmin->getCustomers($id_cust);

        $this->form_validation->set_rules('namacust', 'Nama Customers', 'required|trim');
        $this->form_validation->set_rules('alamatcust', 'Alamat Customers', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/customers/edit_cust', $data);
            $this->load->view('templates/footer_admin');
        } else {

            $old_image = $data['cust']['logo_cust'];

            // Cek jika ada file yang diupload
            if (!empty($_FILES['logo_cust']['name'])) {
                if ($this->upload->do_upload('logo_cust')) {

                    $config['upload_path'] = './assets/vendor/landingpage/image/cust/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['file_name'] = 'customers-' . time();
                    $this->load->library('upload', $config);

                    if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/cust/' . $old_image)) {
                        @unlink(FCPATH . 'assets/vendor/landingpage/image/cust/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('customers/editcustomers/' . $id_cust);
                    return;
                }
            } else {
                $new_image = $old_image;
            }

            $updateData = [
                'nama_cust' => htmlspecialchars($this->input->post('namacust', true)),
                'alamat_cust' => htmlspecialchars($this->input->post('alamatcust', true)),
                'logo_cust' => $new_image,
            ];

            $this->modelAdmin->updateCustomers($updateData, $id_cust);
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('customers');
        }
    }

    public function hapuscustomers($id_cust)
    {
        $this->modelAdmin->deleteCustomers($id_cust);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('customers');
    }
}
