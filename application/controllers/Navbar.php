<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends CI_Controller
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
        $data['title'] = 'Admin - Kelola Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/navbar/index', $data);
        $this->load->view('templates/footer_admin');
    }

    // Kelola Menu Navbar

    public function manageNavMenu()
    {
        $data['title'] = 'Admin - Kelola Menu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['menunav'] = $this->modelLanding->getAllMenu();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/navbar/menunav/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addMenuNav()
    {
        $data['title'] = 'Admin - Tambah Menu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->form_validation->set_rules('namamenunav', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('linkmenu', 'Link Menu', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/navbar/menunav/add_menu');
            $this->load->view('templates/footer_admin');
        } else {
            $dropdown = $this->input->post('dropdownmenu');
            $dropdown = $dropdown !== null ? htmlspecialchars($dropdown, true) : 'off';

            $data = [
                'nama_menu' => htmlspecialchars($this->input->post('namamenunav', true)),
                'link' => htmlspecialchars($this->input->post('linkmenu', true)),
                'dropdown' => $dropdown,
            ];

            $this->modelAdmin->insertMenuNav($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('navbar/manageNavMenu');
        }
    }

    public function editMenuNav($id)
    {
        $data['title'] = 'Admin - Edit Menu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['menunavs'] = $this->modelAdmin->getMenuNav($id);


        $this->form_validation->set_rules('namamenunav', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('linkmenu', 'Link Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/navbar/menunav/edit_menu', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $data = [
                'nama_menu' => htmlspecialchars($this->input->post('namamenunav', true)),
                'link' => htmlspecialchars($this->input->post('linkmenu', true)),
                'dropdown' => htmlspecialchars($this->input->post('dropdownmenu', true)),
            ];

            $this->modelAdmin->updateMenuNav($data, $id);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('navbar/manageNavMenu');
        }
    }

    public function hapusMenuNav($id_menu)
    {
        $this->modelAdmin->deleteMenuNav($id_menu);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('navbar/manageNavMenu');
    }

    // Kelola Submenu

    public function manageNavSubmenu()
    {
        $data['title'] = 'Admin - Kelola Submenu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['submenus'] = $this->modelAdmin->getAllSubmenuComb();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/navbar/submenunav/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function addSubmenuNav()
    {
        $data['title'] = 'Admin - Tambah Submenu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['menunav'] = $this->modelLanding->getAllMenu();

        $this->form_validation->set_rules('submenunav', 'Nama Submenu', 'required|trim');
        $this->form_validation->set_rules('linksubmenu', 'Link submenu', 'required');
        $this->form_validation->set_rules('menuinduk', 'Menu Induk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/navbar/submenunav/add_submenu');
            $this->load->view('templates/footer_admin');
        } else {
            $data = [
                'nama_submenu' => htmlspecialchars($this->input->post('submenunav', true)),
                'link_submenu' => htmlspecialchars($this->input->post('linksubmenu', true)),
                'id_menu' => htmlspecialchars($this->input->post('menuinduk', true)),
            ];

            $this->modelAdmin->insertSubmenuNav($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('navbar/manageNavSubmenu');
        }
    }

    public function editSubmenuNav($id)
    {
        $data['title'] = 'Admin - Edit Submenu Navbar';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));
        $data['submenu'] = $this->modelAdmin->getSubmenuNav($id);
        $data['menunav'] = $this->modelLanding->getAllMenu();

        $this->form_validation->set_rules('submenunav', 'Nama Submenu', 'required|trim');
        $this->form_validation->set_rules('linksubmenu', 'Link Submenu', 'required');
        $this->form_validation->set_rules('menuinduk', 'Menu Induk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/navbar/submenunav/edit_submenu', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $data = [
                'nama_submenu' => htmlspecialchars($this->input->post('submenunav', true)),
                'link_submenu' => htmlspecialchars($this->input->post('linksubmenu', true)),
                'id_menu' => htmlspecialchars($this->input->post('menuinduk', true)),
            ];

            $this->modelAdmin->updateSubmenuNav($data, $id);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('navbar/manageNavSubmenu');
        }
    }

    public function hapusSubmenuNav($id_submenu)
    {
        $this->modelAdmin->deleteSubmenuNav($id_submenu);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('navbar/manageNavSubmenu');
    }

    // navbrand
    public function manageNavbrand()
    {
        $data['title'] = 'Admin - Kelola Navbar Brand';
        $data['active'] = 'kelland';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));


        $data['colors'] = [
            'dark' => 'Dark',
            'primary' => 'Primary',
            'success' => 'Success',
            'info' => 'Info',
        ];

        $data['navbrand'] = $this->modelAdmin->getNavbrand();


        $this->form_validation->set_rules('navbrandtext', 'Navbar Text', 'required|trim');
        $this->form_validation->set_rules('textcolor', 'Text Color', 'required|trim');
        $this->form_validation->set_rules('linknavbrand', 'Navbar Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('admin/navbar/navbrand/index', $data);
            $this->load->view('templates/footer_admin');
        } else {

            $navbrandimg = $_FILES['navbrandimg']['name'];
            $oldnavbrandimg = $data['navbrand']['image'];
            $id_brand = $data['navbrand']['id_brand'];

            if ($navbrandimg) {
                $config['upload_path'] = './assets/vendor/landingpage/image/navbrand/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = 'navbrand-' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('navbrandimg')) {

                    if ($oldnavbrandimg && file_exists(FCPATH . 'assets/vendor/landingpage/image/navbrand/' . $oldnavbrandimg)) {
                        unlink(FCPATH . 'assets/vendor/landingpage/image/navbrand/' . $oldnavbrandimg);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('navbar/manageNavbrand');
                    return;
                }
            } else {
                $new_image = $oldnavbrandimg;
            }

            // cek status
            $is_checked = ($this->input->post('navbrandstatus') === 'on');
            $status = $is_checked ? 'on' : 'off';

            $data = [
                'nama_brand' => htmlspecialchars($this->input->post('navbrandtext', true)),
                'link_brand' => htmlspecialchars($this->input->post('linknavbrand', true)),
                'warna' => htmlspecialchars($this->input->post('textcolor', true)),
                'brand_image_status' => $status,
                'image' => $new_image,
            ];

            $this->modelAdmin->updateNavbrand($data, $id_brand);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('navbar/manageNavbrand');
        }
    }
}
