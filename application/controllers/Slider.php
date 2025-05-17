<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
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
        $data['title'] = 'Admin - Slider';
        $data['active'] = 'slider';
        $data['slider'] = $this->modelAdmin->getAllSlider();
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/sliders/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addslider()
    {
        $data['title'] = 'Admin - Tambah Slider';
        $data['active'] = 'slider';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('headline', 'Headline', 'required|trim');
        $this->form_validation->set_rules('desk', 'Desk', 'required|trim');
        $this->form_validation->set_rules('tombol_text1', 'Tombol Text 1', 'required|trim');
        $this->form_validation->set_rules('tombol_text2', 'Tombol Text 2', 'required|trim');
        $this->form_validation->set_rules('tombol_link1', 'Tombol Link 1', 'required|trim');
        $this->form_validation->set_rules('tombol_link2', 'Tombol Link 2', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/sliders/add_slider', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $slider = $_FILES['image_slide']['name'];

            if ($slider) {
                $config['upload_path'] = './assets/vendor/landingpage/image/slider/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 5120;
                $config['file_name'] = 'slider-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image_slide')) {
                    $image = $this->upload->data('file_name');
                    $input = $this->input->post(null, true); //xss cleaning

                    $dataInsert = [
                        'headline' => htmlspecialchars($input['headline']),
                        'desk' => htmlspecialchars($input['desk']),
                        'tombol_text1' => htmlspecialchars($input['tombol_text1']),
                        'tombol_text2' => htmlspecialchars($input['tombol_text2']),
                        'tombol_link1' => htmlspecialchars($input['tombol_link1']),
                        'tombol_link2' => htmlspecialchars($input['tombol_link2']),
                        'image_slide' => $image,
                        'aktif' => isset($input['aktif']) ? 'on' : 'off',
                    ];

                    $this->modelAdmin->insertSlider($dataInsert);
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('slider');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('slider/addslider');
                    return;
                }
            } else {
                $this->session->set_flashdata('error', 'Image Empty!');
                redirect('slider/addslider');
            }
        }
    }

    public function editslider($id)
    {
        $data['title'] = 'Admin - Edit Slider';
        $data['active'] = 'slider';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $data['slider'] = $this->modelAdmin->getSliderById($id);

        $this->form_validation->set_rules('headline', 'Headline', 'required|trim');
        $this->form_validation->set_rules('desk', 'Desk', 'required|trim');
        $this->form_validation->set_rules('tombol_text1', 'Tombol Text 1', 'required|trim');
        $this->form_validation->set_rules('tombol_text2', 'Tombol Text 2', 'required|trim');
        $this->form_validation->set_rules('tombol_link1', 'Tombol Link 1', 'required|trim');
        $this->form_validation->set_rules('tombol_link2', 'Tombol Link 2', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/sliders/edit_slider', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $old_image = $data['slider']['image_slide'];
            $slider = $_FILES['image_slide']['name'];

            if ($slider) {
                $config['upload_path'] = './assets/vendor/landingpage/image/slider/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 5120;
                $config['file_name'] = 'slider-' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image_slide')) {
                    if ($old_image && file_exists(FCPATH . 'assets/vendor/landingpage/image/slider/' . $old_image)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/slider/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('slider/editslider/' . $id);
                    return;
                }
            } else {
                $new_image = $old_image;
            }

            // Update data
            $input = $this->input->post(null, true); //xss cleaning
            $dataUpdate = [
                'headline' => htmlspecialchars($input['headline']),
                'desk' => htmlspecialchars($input['desk']),
                'tombol_text1' => htmlspecialchars($input['tombol_text1']),
                'tombol_text2' => htmlspecialchars($input['tombol_text2']),
                'tombol_link1' => htmlspecialchars($input['tombol_link1']),
                'tombol_link2' => htmlspecialchars($input['tombol_link2']),
                'image_slide' => $new_image,
                'aktif' => isset($input['aktif']) ? 'on' : 'off',
            ];

            $this->modelAdmin->updateSlider($id, $dataUpdate);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('slider');
        }
    }

    public function hapusslider($id)
    {
        $slider = $this->modelAdmin->getSliderById($id);
        if ($slider) {
            if ($slider['image_slide'] && file_exists(FCPATH . 'assets/vendor/landingpage/image/slider/' . $slider['image_slide'])) {
                unlink(FCPATH . 'assets/vendor/landingpage/image/slider/' . $slider['image_slide']);
            }
            $this->modelAdmin->deleteSlider($id);
            $this->session->set_flashdata('flash', 'dihapus');
        } else {
            $this->session->set_flashdata('error', 'Slider not found!');
        }
        redirect('slider');
    }
}
