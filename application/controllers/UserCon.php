<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserCon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserMod');
        $this->load->model('LeadMod');
        $this->load->model('PomodoroMod');
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
        $this->session->unset_userdata('fail_login');
        $this->session->unset_userdata('gene_login_val');
        $this->session->unset_userdata('reg_suc');
        $fail_login_val = '
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" ><?php echo $username; ?>Login Failed</h5>
              <a href="/logout"><button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button></a>
           </div>
           <div class="modal-body text-center">
              <p>Please enter the correct password.</p>
              <div class="mb-3 d-grid gap-2">
                 <button type="submit" class="btn btn-block btn-secondary" data-bs-toggle="modal" href="#loginModal">Login</button>
              </div>
           </div>
        </div>
        </div>
        ';
        $gene_login_val = '
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" ><?php echo $username; ?>Login Failed</h5>
              <a href="/logout"><button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button></a>
           </div>
           <div class="modal-body text-center">
              <p>Something went wrong. Please login again</p>
              <div class="mb-3 d-grid gap-2">
                 <button type="submit" class="btn btn-block btn-secondary" data-bs-toggle="modal" href="#loginModal">Login</button>
              </div>
           </div>
        </div>
        </div>
        ';
        if ($user) {
            $dataraw = $this->LeadMod->getLeaderboard();
            $user_time = $this->db->select_sum('totalwaktu')->get_where('pomodoros', ['id_user' => $user['id']])->row_array();
            $datatmp = $this->db->select_sum('tmpwaktu')->get_where('pomodoros', ['id_user' => $user['id']])->row_array();
            if (password_verify($pass, $user['password'])) {
                if (!isset($user_time['totalwaktu'])) {
                    $user_time['totalwaktu'] = 0;
                }
                if ($user_time['totalwaktu'] >= 9750) {
                    $achievement = 'Grade A+';
                } else if ($user_time['totalwaktu'] >= 9250) {
                    $achievement = 'Grade A';
                } else if ($user_time['totalwaktu'] >= 9000) {
                    $achievement = 'Grade A-';
                } else if ($user_time['totalwaktu'] >= 8750) {
                    $achievement = 'Grade B+';
                } else if ($user_time['totalwaktu'] >= 8250) {
                    $achievement = 'Grade B';
                } else if ($user_time['totalwaktu'] >= 8000) {
                    $achievement = 'Grade B-';
                } else if ($user_time['totalwaktu'] >= 7750) {
                    $achievement = 'Grade C+';
                } else if ($user_time['totalwaktu'] >= 7250) {
                    $achievement = 'Grade C';
                } else if ($user_time['totalwaktu'] >= 7000) {
                    $achievement = 'Grade C-';
                } else if ($user_time['totalwaktu'] >= 6750) {
                    $achievement = 'Grade D+';
                } else if ($user_time['totalwaktu'] >= 6250) {
                    $achievement = 'Grade D';
                } else if ($user_time['totalwaktu'] >= 6000) {
                    $achievement = 'Grade D-';
                } else if ($user_time['totalwaktu'] < 6000) {
                    $achievement = 'Grade E';
                }

                foreach ($datatmp as $ds) {
                    $dss = intval($ds / 60);
                }

                $data = array(
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                    'totalwaktu' => $user_time['totalwaktu'],
                    'achievement' => $achievement,
                    'leaderboard' => $dataraw,
                    'user_time_act' => $dss,
                );
                $this->session->set_userdata($data);
                $this->load->view('main', $data);
                $this->load->view('login', $data);
            } else {
                $this->session->set_flashdata('fail_login', $fail_login_val);
                redirect('main');
            }
        } else {
            $this->session->set_flashdata('gene_login_val', $gene_login_val);
            redirect('main');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('fail_login');
        $this->session->unset_userdata('gene_login_val');
        $this->session->unset_userdata('reg_suc');
        redirect('/main');
    }

    function register()
    {
        $this->form_validation->set_rules('user_nameR', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|is_unique[users.email]');
        $this->session->unset_userdata('fail_login');
        $this->session->unset_userdata('gene_login_val');
        $reg_suc_val = '
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" ><?php echo $username; ?>Register Complete</h5>
              <a href="/logout"><button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button></a>
           </div>
           <div class="modal-body text-center">
              <p>Register complete, now you can login with the account.</p>
              <div class="mb-3 d-grid gap-2">
                 <button type="submit" class="btn btn-block btn-secondary" data-bs-toggle="modal" href="#loginModal">Login</button>
              </div>
           </div>
        </div>
        </div>
        ';
        if ($this->form_validation->run() == false) {
            redirect('main', 'refresh');
        } else {
            $this->session->set_flashdata('reg_suc', $reg_suc_val);
            $this->UserMod->addUser();
            redirect('main');
        }
    }
}
