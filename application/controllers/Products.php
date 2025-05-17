    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Products extends CI_Controller
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
            $data['title'] = 'Admin - Kelola Products';
            $data['active'] = 'products';
            $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
            $data['products'] = $this->modelAdmin->getAllProducts();


            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/products/index', $data);
            $this->load->view('templates/footer_admin');
        }

        public function tambahProduct()
        {
            $data['title'] = 'Admin - Tambah Products';
            $data['active'] = 'products';
            $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

            $this->form_validation->set_rules('namaproduct', 'Nama Product', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            $this->form_validation->set_rules('hotspot', 'Hotspot', 'required|trim');
            $this->form_validation->set_rules('hotspottop', 'Right Hotspot', 'required|trim|numeric');
            $this->form_validation->set_rules('hotspotleft', 'Left Hotspot', 'required|trim|numeric');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header_admin', $data);
                $this->load->view('templates/sidebar_admin', $data);
                $this->load->view('admin/products/add_product');
                $this->load->view('templates/footer_admin');
            } else {

                if (!empty($_FILES['gambar']['name'])) {

                    $config['upload_path'] = './assets/vendor/landingpage/image/part/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['file_name'] = 'product-' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('gambar')) {
                        $gambar = $this->upload->data('file_name');
                        $input = $this->input->post(null, true); //xss cleaning

                        $dataInsert = [
                            'nama_product' => htmlspecialchars($input['namaproduct']),
                            'deskripsi_product' => htmlspecialchars($input['deskripsi']),
                            'image_product' => $gambar,
                            'hotspot' => htmlspecialchars($input['hotspot']),
                            'right_hotspot' => htmlspecialchars($input['hotspottop']),
                            'left_hotspot' => htmlspecialchars($input['hotspotleft']),
                        ];

                        $this->modelAdmin->insertProduct($dataInsert);
                        $this->session->set_flashdata('flash', 'ditambahkan');
                        redirect('products');
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('products/tambahProduct');
                        return;
                    }
                } else {
                    $this->session->set_flashdata('error', 'Image Empty!');
                    redirect('products/tambahProduct');
                }
            }
        }

        public function editProduct($id_product)
        {
            $data['title'] = 'Admin - Edit Products';
            $data['active'] = 'products';
            $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
            $data['product'] = $this->modelAdmin->getProduct($id_product);

            $this->form_validation->set_rules('namaproduct', 'Nama Product', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            $this->form_validation->set_rules('hotspot', 'Hotspot', 'required|trim');
            $this->form_validation->set_rules('hotspottop', 'Right Hotspot', 'required|trim');
            $this->form_validation->set_rules('hotspotleft', 'Left Hotspot', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header_admin', $data);
                $this->load->view('templates/sidebar_admin', $data);
                $this->load->view('admin/products/edit_product', $data);
                $this->load->view('templates/footer_admin');
            } else {
                $old_image = $data['product']['image_product'];

                if (!empty($_FILES['gambar']['name'])) {

                    $config['upload_path'] = './assets/vendor/landingpage/image/part/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['file_name'] = 'product-' . time();

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('gambar')) {
                        if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/part/' . $old_image)) {
                            @unlink(FCPATH . 'assets/vendor/landingpage/image/part/' . $old_image);
                        }
                        $new_image = $this->upload->data('file_name');
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('products/editProduct/' . $id_product);
                        return;
                    }
                } else {
                    $new_image = $old_image;
                }

                $updateData = [
                    'nama_product'     => htmlspecialchars($this->input->post('namaproduct', true)),
                    'deskripsi_product' => htmlspecialchars($this->input->post('deskripsi', true)),
                    'image_product'    => $new_image,
                    'hotspot'          => htmlspecialchars($this->input->post('hotspot', true)),
                    'right_hotspot'    => htmlspecialchars($this->input->post('hotspottop', true)),
                    'left_hotspot'     => htmlspecialchars($this->input->post('hotspotleft', true))
                ];

                $this->modelAdmin->updateProduct($updateData, $id_product);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('products');
            }
        }

        public function hapusProduct($id_product)
        {
            $this->modelAdmin->deleteProduct($id_product);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('products');
        }
    }
