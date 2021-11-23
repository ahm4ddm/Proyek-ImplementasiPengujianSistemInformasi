<?php
class LeadMod extends CI_Model
{
    public function getLeaderboard()
    {
        $this->db->start_cache();
        $this->db->select('username')->from('users')->get()->result();
        $this->db->stop_cache();
        return  $this->db->select('id_user')->select_sum('totalwaktu')->from('pomodoros')->get()->result();
    }
}
