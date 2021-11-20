<?php
class AuthMod extends CI_Model
{
    function dbInsertUser()
    {
        $this->nama = htmlspecialchars($this->input->post('name_full', true));
        $this->username = htmlspecialchars($this->input->post('user_nameR', true));
        $this->email = htmlspecialchars($this->input->post('user_email', true));
        $this->password = password_hash($this->input->post('user_password1'), PASSWORD_ARGON2ID);
        $this->db->insert('users', $this);
    }
}
