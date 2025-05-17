<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('is_logged_in')) {
    function is_logged_in()
    {
        $CI = get_instance();
        $role_id = $CI->session->userdata('role');

        // Kalau belum login
        if (!$role_id) {
            redirect('auth/blocked');
        }

        // Cek hak akses berdasarkan segment[1] (nama folder controller, misal 'admin')
        $uri_segment = $CI->uri->segment(1);

        // Atur role-level akses
        $access_map = [
            'admin' => [1],
            'staff' => [1, 2],
        ];

        if (isset($access_map[$uri_segment]) && !in_array($role_id, $access_map[$uri_segment])) {
            redirect('auth/blocked');
        }
    }
}

if (!function_exists('redirect_if_logged_in')) {
    function redirect_if_logged_in()
    {
        $CI = get_instance();
        $role = $CI->session->userdata('role');

        if ($role) {
            switch ($role) {
                case 1:
                    redirect('admin');
                    break;
                case 2:
                    redirect('staff');
                    break;
                default:
                    redirect('auth');
                    break;
            }
        }
    }
}
