<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AuthMod');
        $this->load->model('LeadMod');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('/main');
    }

    function login()
    {
        $uname = $this->input->post('user_name');
        $pass = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $uname])->row_array();
        if ($user) {
            $dataraw = $this->LeadMod->joins();
            $user_time = $this->db->get_where('pomodoros', ['id' => $user['id']])->row_array();
            if (password_verify($pass, $user['password']) || $this->db->where('password', $pass)) {
                if (!isset($user_time['totalwaktu'])) {
                    $user_time['totalwaktu'] = 0;
                }
                $data = array(
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                    'totalwaktu' => $user_time['totalwaktu'],
                    'leaderboard' => $dataraw
                );
                $this->session->set_userdata($data);
                $this->load->view('main', $data);
                $this->load->view('login', $data);
            } else {
                redirect('/main');
            }
        } else {
            redirect('/main');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', 'berhasil keluar');
        redirect('main', 'refresh');
    }

    function register()
    {
        $this->form_validation->set_rules('user_nameR', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|is_unique[users.email]');
        if ($this->form_validation->run() == false) {
            $this->load->view('main');
            $this->load->view('login');
        } else {
            $this->AuthMod->dbInsertUser();
            $this->load->view('main');
            $this->load->view('login');
        }
    }
}
