<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('v_login');
    }

    function login()
    {
        $this->load->model('users');
        // $this->load->library('form_validation');
        // $rules = $this->users->rules();
        // $this->form_validation->set_rules($rules);
        // if ($this->form_validation->run() == false) {
        //     return $this->load->view('v_auth');
        // }
        $uname = $this->input->post('username');
        $pass = $this->input->post('password');
        if ($this->users->checkusersDB($uname, $pass)) {
            echo "sukses login";
            redirect(200);
        } else {
            echo "gagal";
            redirect(401);
        }
        $this->load->view('v_login');
    }
}
