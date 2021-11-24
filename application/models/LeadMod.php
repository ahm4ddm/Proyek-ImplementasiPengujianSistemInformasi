<?php

use phpDocumentor\Reflection\PseudoTypes\False_;

class LeadMod extends CI_Model
{
    public function getLeaderboard()
    {
        $this->db->select('username');
        $this->db->from('users');
        $this->db->join('pomodoros', 'users.id = pomodoros.id_user');
        $this->db->select_sum('totalwaktu')->order_by('totalwaktu', 'DESC');
        $query = $this->db->group_by('pomodoros.id_user')->get()->result();
        return $query;
    }
}
