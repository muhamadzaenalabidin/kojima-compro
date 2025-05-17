<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelLanding extends CI_Model
{
    // kelola navbar menu
    public function getAllMenu()
    {
        return $this->db->get('navbar_menu')->result_array();
    }

    public function getAllSubmenu()
    {
        return $this->db->get('navbar_submenu')->result_array();
    }

    public function getdatabrand()
    {
        return $this->db->get('navbar_brand')->row_array();
    }
    // end kelola navbar menu

    // product
    public function getAllProduct()
    {
        return $this->db->get('products')->result_array();
    }

    public function getAllProductCategory()
    {
        return $this->db->get('product_category')->result_array();
    }

    public function getAllCustomers()
    {
        return $this->db->get('customer')->result_array();
    }


    public function getProfileCompany()
    {
        return $this->db->get('profile_comp')->row_array();
    }

    public function getAllActiveSliders()
    {
        return $this->db->get_where('slider', ['aktif' => 'on'])->result_array();
    }

    public function getAllGroups()
    {
        return $this->db->get('group_comp')->result_array();
    }

    public function getFooterGroups()
    {
        $this->db->select('group_comp.nama_gcomp, group_comp.logo_gcomp, group_comp.alamat_group');
        $this->db->from('footer');
        $this->db->join('group_comp', 'footer.id_gcomp = group_comp.id_group');
        $this->db->where('footer.status', 'on');
        return $this->db->get()->result_array();
    }
}
