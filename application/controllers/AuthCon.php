<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthMod');
        $this->load->helper('url', 'file');
    }

    function index()
    {
<<<<<<< Updated upstream
        $this->load->view('auth/v_login');
=======
        $this->load->view('/index');
>>>>>>> Stashed changes
    }

    function login()
    {
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $uname = $this->input->post('user_name');
        $pass = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $uname])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/v_login');
        } else {
            if ($user) {
                if (password_verify($pass, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard', 'refresh');
                } else {
                    //$this->session->set_flashdata('message', 'password salah');
                    echo 'password salah';
                }
            } else {
<<<<<<< Updated upstream
                //$this->session->set_flashdata('message', 'username belum terdaftar');
                echo 'username belum terdaftar';
            }
=======
                redirect('/index');
            }
        } else {
            redirect('/index');
>>>>>>> Stashed changes
        }
    }

    function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', 'berhasil keluar');
        redirect('login');
    }

    function register()
    {
        $this->form_validation->set_rules('name_full', 'Fullname', 'required');
        $this->form_validation->set_rules('user_name', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('user_password1', 'Password', 'required|trim|min_length[4]|matches[user_password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('user_password2', 'Password', 'required|trim|matches[user_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/v_register');
        } else {
            $this->AuthMod->dbInsertUser();
            return $this->load->view('auth/v_login');
        }
    }
}
