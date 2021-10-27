<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('v_register');
    }
}
