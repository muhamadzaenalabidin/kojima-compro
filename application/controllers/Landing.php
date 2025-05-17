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

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/index', $data);
        $this->load->view('landing/templates/footer');
    }

    public function about()
    {
        $data['active'] = 'about';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/about/index');
        $this->load->view('landing/templates/footer');
    }

    public function milestones()
    {
        $data['active'] = 'information';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();


        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/milestone/index');
        $this->load->view('landing/templates/footer');
    }

    public function achievements()
    {
        $data['active'] = 'information';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/achievements/index');
        $this->load->view('landing/templates/footer');
    }

    public function product()
    {
        $data['active'] = 'product';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['product'] = $this->modelLanding->getAllProduct();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/product/index', $data);
        $this->load->view('landing/templates/footer');
    }

    public function contact()
    {
        $data['active'] = 'contact';
        $data['menu'] = $this->modelLanding->getAllMenu();
        $data['submenu'] = $this->modelLanding->getAllSubmenu();
        $data['navbrand'] = $this->modelLanding->getdatabrand();
        $data['profile'] = $this->modelLanding->getProfileCompany();

        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/navbar', $data);
        $this->load->view('landing/contact/index', $data);
        $this->load->view('landing/templates/footer');
    }
}
