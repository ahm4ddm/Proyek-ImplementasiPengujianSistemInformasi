<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AuthMod');
        $this->load->helper('url', 'file');
        $this->load->model('LeadMod');
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
                    'statuslogin' => 1,
                    'leaderboard' => $dataraw
                );
                $this->session->set_userdata($data);
                $this->load->view('main', $data);
                $this->load->view('login', $data);
            } else {
                $this->session->set_userdata('statuslogin', 2);
                redirect('/main');
            }
        } else {
            $this->session->set_userdata('statuslogin', 2);
            redirect('/main');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('statuslogin', 0);
        $this->session->set_flashdata('dupun', 0);
        $this->session->set_flashdata('dupem', 0);
        $this->session->set_flashdata('message', 'berhasil keluar');
        redirect('main', 'refresh');
    }

    function register()
    {
        $user = $this->db->get_where('users', ['username' => $this->input->post('user_name')])->row_array();
        $email = $this->db->get_where('users', ['email' => $this->input->post('user_email')])->row_array();
        if ($user or $email) {
            $this->session->set_userdata('dup', 1);
            $this->load->view('main');
            $this->load->view('login');
        }
        $this->session->set_flashdata('dup', 0);
        $this->AuthMod->dbInsertUser();
        $this->load->view('main');
        $this->load->view('login');
    }
}
