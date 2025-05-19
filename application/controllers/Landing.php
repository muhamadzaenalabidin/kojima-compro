<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLanding');
    }
    public function index()
    {
        $data['active'] = 'home';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['category'] = $this->modelLanding->getAllProductCategory();
        $data['customers'] = $this->modelLanding->getAllCustomers();
        $data['sliders'] = $this->modelLanding->getAllActiveSliders();
        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();
        $data['company'] = $this->modelLanding->getProfileCompany();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/index', $data);
        $this->load->view('landing/templates/footer', $data);
    }

    public function about()
    {
        $data['active'] = 'about';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/about/index', $data);
        $this->load->view('landing/templates/footer', $data);
    }

    public function milestones()
    {
        $data['active'] = 'information';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();

        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();
        $data['milestones'] = $this->modelLanding->getMilestones();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/milestone/index', $data);
        $this->load->view('landing/templates/footer', $data);
    }

    public function achievements()
    {
        $data['active'] = 'information';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();
        $data['lastach'] = $this->modelLanding->getLatestAchievements();
        $data['allach'] = $this->modelLanding->getAllAch();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/achievements/index');
        $this->load->view('landing/templates/footer', $data);
    }

    public function product()
    {
        $data['active'] = 'product';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['product'] = $this->modelLanding->getAllProduct();
        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/product/index', $data);
        $this->load->view('landing/templates/footer', $data);
    }

    public function contact()
    {
        $this->load->library(['email', 'session', 'form_validation']);
        $this->load->helper(['url', 'form']);

        if ($this->input->post()) {
            // SET FORM VALIDATION RULES
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
            $this->form_validation->set_rules('phone_full', 'Phone', 'required|trim|numeric|min_length[10]|max_length[20]');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required|trim');

            if ($this->form_validation->run() == FALSE) {
                // VALIDATION FAILED
                $this->session->set_flashdata('error', validation_errors('<div>', '</div>'));
                redirect('landing/contact');
                return;
            }

            // FORM INPUT DATA
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone_full');
            $country = $this->input->post('country');
            $message = $this->input->post('message');

            // EMAIL SEND
            $this->email->from($email, $name);
            $this->email->to('muhamadzaenalab@gmail.com');
            $this->email->subject("Pesan dari Contact Us");
            $this->email->message("
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Message:</strong><br>$message</p>
        ");

            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengirim pesan!');
            }

            redirect('landing/contact');
        }

        // LOAD DATA & VIEW
        $data['active'] = 'contact';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['profile'] = $this->modelLanding->getProfileCompany();
        $data['groups'] = $this->modelLanding->getAllGroups();
        $data['footercomp'] = $this->modelLanding->getProfileCompany();
        $data['footergcomp'] = $this->modelLanding->getFooterGroups();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/contact/index', $data);
        $this->load->view('landing/templates/footer', $data);
    }
}
