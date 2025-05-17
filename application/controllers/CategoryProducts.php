<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryProducts extends CI_Controller
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
        $data['title'] = 'Admin - Kelola Product Category';
        $data['active'] = 'categoryproduct';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['product_category'] = $this->modelAdmin->getAllProductCategory();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/category/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambahCategory()
    {
        $data['title'] = 'Admin - Kelola Product Category';
        $data['active'] = 'categoryproduct';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('namacategory', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/category/add_category');
            $this->load->view('templates/footer_admin');
        } else {
            // cek sudah upload gambar atau belum
            if (!empty($_FILES['gambarcategory']['name'])) {
                $config['upload_path'] = './assets/vendor/landingpage/image/catpart/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = 'category-' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambarcategory')) {
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning
                    $dataInsert = [
                        'nama_category' => htmlspecialchars($input['namacategory']),
                        'gambar_category' => $image,
                    ];
                    $this->modelAdmin->insertProductCategory($dataInsert);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('categoryproducts');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('categoryproducts/tambahCategory');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty!');
                redirect('categoryproducts/tambahCategory');
            }
        }
    }



    public function editCategory($id_category)
    {
        $data['title'] = 'Admin - Edit Product Category';
        $data['active'] = 'categoryproduct';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['category'] = $this->modelAdmin->getProductCategory($id_category);

        $this->form_validation->set_rules('namacategory', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/category/edit_category', $data);
            $this->load->view('templates/footer_admin');
        } else {
            // gambar lama dari database
            $old_image = $data['category']['gambar_category'];

            // ambil gambar baru dari form
            if (!empty($_FILES['gambarcategory']['name'])) {
                // jika ada gambar baru
                $config['upload_path'] = './assets/vendor/landingpage/image/catpart/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = 'category-' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambarcategory')) {
                    // Hapus gambar lama jika ada
                    if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/catpart/' . $old_image)) {
                        @unlink(FCPATH . 'assets/vendor/landingpage/image/catpart/' . $old_image);
                    }
                    // ambil nama gambar baru
                    $new_image = $this->upload->data('file_name');
                } else {
                    // Kalau gagal upload, tampilkan error dan redirect balik
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('categoryproducts/editCategory/' . $id_category);
                    return; // stop update ke DB
                }
            } else {
                // Jika tidak ada gambar baru, gunakan gambar lama
                $new_image = $old_image;
            }

            // ambil data yang akan diupdate
            $updateData = [
                'nama_category' => htmlspecialchars($this->input->post('namacategory', true)),
                'gambar_category' => $new_image,
            ];

            // Update ke database
            $this->modelAdmin->updateProductCategory($updateData, $id_category);

            // Feedback dan redirect
            $this->session->set_flashdata('flash', 'diubah');
            redirect('categoryproducts');
        }
    }

    public function hapusCategory($id_category)
    {
        $this->modelAdmin->deleteProductCategory($id_category);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('categoryproducts');
    }
}
