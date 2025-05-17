<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelSession extends CI_Model
{

    public function getDataUser($username)
    {
        return $this->db->get_where('pengguna', ['username' => $username])->row_array();
    }
}
