<?php
class LeadMod extends CI_Model
{

    public function joins()
    {
        $this->db->select(['username', 'totalwaktu']);
        $this->db->from('users');
        $this->db->join('pomodoros', 'users.id = pomodoros.id');
        $query = $this->db->order_by('totalwaktu', 'DESC')->get()->result();
        return $query;
    }
}
