<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrivateCon extends CI_Controller
{
    function dashboard()
    {
        $namaSes = $this->session->userdata('username');
        $data['user'] = $this->db->get_where('users', ['username' => $namaSes])->row_array();
        echo 'Selamat datang ' . $data['user']['nama'];

        echo '<br><a href="http://127.0.0.1:1234/logout">Keluar</a>';
    }
}
