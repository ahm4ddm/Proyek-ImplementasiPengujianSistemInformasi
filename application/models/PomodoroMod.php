<?php
class PomodoroMod extends CI_Model
{
    public function addTime($data)
    {
        return $this->db->insert('pomodoros', $data);
    }
}
