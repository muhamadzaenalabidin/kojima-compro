<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('modelSession');
    }

    public function index()
    {
        $data['title'] = 'Admin - Dashboard';
        $data['active'] = 'dashboard';
        $data['user'] = $this->modelSession->getDataUser($this->session->userdata('username'));

        $this->load->view('templates/header_staff', $data);
        $this->load->view('templates/sidebar_staff', $data);
        $this->load->view('staff/index', $data);
        $this->load->view('templates/footer_staff');
    }
}
