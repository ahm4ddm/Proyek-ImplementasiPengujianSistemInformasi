<?php
class TodoMod extends CI_Model
{
    public $judul;
    public $catatan;
    public $waktu;
    public $status;

    public function dbInsertMod()
    {
        $this->judul = htmlspecialchars($this->input->post('judul', true));
        $this->catatan = htmlspecialchars($this->input->post('catatan', true));
        $this->waktu = date('Y-m-d H:i:s');
        $this->status = 1;
        $this->db->insert('todos', $this);
    }
}
