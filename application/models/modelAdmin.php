<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelAdmin extends CI_Model
{

    public function insertPengguna($data)
    {
        $this->db->insert('pengguna', $data);
    }

    public function getAllPengguna()
    {
        return $this->db->get('pengguna')->result_array();
    }

    public function getPenggunaById($id)
    {
        return $this->db->get_where('pengguna', ['id_user' => $id])->row_array();
    }

    public function updatePengguna($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('pengguna', $data);
    }

    public function deletePengguna($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('pengguna');
    }



    // landing
    public function insertMenuNav($data)
    {
        $this->db->insert('navbar_menu', $data);
    }

    public function getMenuNav($id_menu)
    {
        return $this->db->get_where('navbar_menu', ['id_menu' => $id_menu])->row_array();
    }

    public function updateMenuNav($data, $id_menu)
    {
        $this->db->where('id_menu', $id_menu);
        $this->db->update('navbar_menu', $data);
    }

    public function deleteMenuNav($id_menu)
    {
        $this->db->where('id_menu', $id_menu);
        $this->db->delete('navbar_menu');
    }

    // submenu
    public function getAllSubmenuComb()
    {
        $this->db->select('navbar_submenu.*, navbar_menu.nama_menu');
        $this->db->from('navbar_submenu');
        $this->db->join('navbar_menu', 'navbar_submenu.id_menu = navbar_menu.id_menu');
        return $this->db->get()->result_array();
    }

    public function insertSubmenuNav($data)
    {
        $this->db->insert('navbar_submenu', $data);
    }

    public function getSubmenuNav($id_submenu)
    {
        return $this->db->get_where('navbar_submenu', ['id_submenu' => $id_submenu])->row_array();
    }

    public function updateSubmenuNav($data, $id_submenu)
    {
        $this->db->where('id_submenu', $id_submenu);
        $this->db->update('navbar_submenu', $data);
    }

    public function deleteSubmenuNav($id_submenu)
    {
        $this->db->where('id_submenu', $id_submenu);
        $this->db->delete('navbar_submenu');
    }

    public function getNavbrand()
    {
        return $this->db->get('navbar_brand')->row_array();
    }

    public function updateNavbrand($data, $id_brand)
    {
        $this->db->where('id_brand', $id_brand);
        $this->db->update('navbar_brand', $data);
    }

    public function getAllProducts()
    {
        return $this->db->get('products')->result_array();
    }

    public function insertProduct($data)
    {
        $this->db->insert('products', $data);
    }

    public function getProduct($id_product)
    {
        return $this->db->get_where('products', ['id_product' => $id_product])->row_array();
    }

    public function updateProduct($data, $id_product)
    {
        $this->db->where('id_product', $id_product);
        $this->db->update('products', $data);
    }

    public function deleteProduct($id_product)
    {
        $this->db->where('id_product', $id_product);
        $this->db->delete('products');
    }


    // product category
    public function getAllProductCategory()
    {
        return $this->db->get('product_category')->result_array();
    }

    public function insertProductCategory($data)
    {
        $this->db->insert('product_category', $data);
    }

    public function getProductCategory($id_category)
    {
        return $this->db->get_where('product_category', ['id_category' => $id_category])->row_array();
    }

    public function updateProductCategory($data, $id_category)
    {
        $this->db->where('id_category', $id_category);
        $this->db->update('product_category', $data);
    }

    public function deleteProductCategory($id_category)
    {
        $this->db->where('id_category', $id_category);
        $this->db->delete('product_category');
    }


    // customer
    public function getAllCustomers()
    {
        return $this->db->get('customer')->result_array();
    }

    public function getCustomers($id_cust)
    {
        return $this->db->get_where('customer', ['id_cust' => $id_cust])->row_array();
    }

    public function insertCustomers($data)
    {
        $this->db->insert('customer', $data);
    }

    public function updateCustomers($data, $id_cust)
    {
        $this->db->where('id_cust', $id_cust);
        $this->db->update('customer', $data);
    }

    public function deleteCustomers($id_cust)
    {
        $this->db->where('id_cust', $id_cust);
        $this->db->delete('customer');
    }


    // profile company

    public function getProfile()
    {
        return $this->db->get('profile_comp')->row_array();
    }

    public function updateProfile($data, $id_profile)
    {
        $this->db->where('id_comp', $id_profile);
        $this->db->update('profile_comp', $data);
    }



    // group
    public function getGroups()
    {
        return $this->db->get('group_comp')->result_array();
    }

    public function addGroups($data)
    {
        $this->db->insert('group_comp', $data);
        $id_gcomp = $this->db->insert_id();


        $this->db->insert('footer', [
            'id_gcomp' => $id_gcomp,
            'status'   => 'off'
        ]);
    }

    public function getGroupById($id)
    {
        return $this->db->get_where('group_comp', ['id_group' => $id])->row_array();
    }

    public function updateGroup($id, $data)
    {
        $this->db->where('id_group', $id);
        $this->db->update('group_comp', $data);
    }

    public function deleteGroup($id)
    {
        $this->db->where('id_group', $id);
        $this->db->delete('group_comp');
    }


    // slider
    public function getAllSlider()
    {
        return $this->db->get('slider')->result_array();
    }

    public function insertSlider($data)
    {
        $this->db->insert('slider', $data);
    }

    public function updateSlider($id, $data)
    {
        $this->db->where('id_slider', $id);
        $this->db->update('slider', $data);
    }

    public function getSliderById($id)
    {
        return $this->db->get_where('slider', ['id_slider' => $id])->row_array();
    }

    public function deleteSlider($id)
    {
        $this->db->where('id_slider', $id);
        $this->db->delete('slider');
    }

    // footer
    public function getFooterWithCompany()
    {
        $this->db->select('group_comp.logo_gcomp, group_comp.nama_gcomp, footer.status, footer.id_footer');
        $this->db->from('footer');
        $this->db->join('group_comp', 'group_comp.id_group = footer.id_gcomp');
        return $this->db->get()->result_array();
    }

    public function getFooterById($id)
    {
        $this->db->select('group_comp.logo_gcomp, group_comp.nama_gcomp, footer.status, footer.id_footer');
        $this->db->from('footer');
        $this->db->join('group_comp', 'group_comp.id_group = footer.id_gcomp');
        $this->db->where('id_footer', $id);
        return $this->db->get()->row_array();
    }


    public function ubahFooter($id, $status)
    {
        return $this->db->update('footer', ['status' => $status], ['id_footer' => $id]);
    }

    // milestone
    public function getAllMilestones()
    {
        return $this->db->get('milestone')->result_array();
    }

    public function getMilestoneById($id)
    {
        return $this->db->get_where('milestone', ['id_milestone' => $id])->row_array();
    }

    public function addMilestone($data)
    {
        $this->db->insert('milestone', $data);
    }

    public function updateMilestone($id, $data)
    {
        $this->db->where('id_milestone', $id);
        $this->db->update('milestone', $data);
    }

    public function deleteMilestone($id)
    {
        $this->db->where('id_milestone', $id);
        $this->db->delete('milestone');
    }

    // achievement

    public function getAllAchievement()
    {
        return $this->db->get('achievement')->result_array();
    }

    public function addAchievement($data)
    {
        $this->db->insert('achievement', $data);
    }

    public function getAchievementById($id)
    {
        return $this->db->get_where('achievement', ['id_ach' => $id])->row_array();
    }

    public function updateAchievement($id, $data)
    {
        $this->db->where('id_ach', $id);
        $this->db->update('achievement', $data);
    }

    public function deleteAchievement($id)
    {
        $this->db->where('id_ach', $id);
        $this->db->delete('achievement');
    }
}
