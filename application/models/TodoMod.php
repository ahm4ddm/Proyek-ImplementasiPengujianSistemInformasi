<?php
class TodoMod extends CI_Model
{
    public $judul;
    public $catatan;
    public $waktu;
    public $status;

    public function dbCreateMod()
    {
        $this->judul = htmlspecialchars($this->input->post('judul', true));
        $this->catatan = htmlspecialchars($this->input->post('catatan', true));
        $this->waktu = date('Y-m-d H:i:s');
        $this->status = 1;
        $this->db->insert('todos', $this);
    }

    public function dbReadMod()
    {
        $query = $this->db->get('todos');
        $res = $query->result_array();
        return $res;
    }

    public function dbUpdateMod()
    {
        $this->judul = htmlspecialchars($this->input->post('judul', true));
        $this->catatan = htmlspecialchars($this->input->post('catatan', true));
        $this->waktu = date('Y-m-d H:i:s');
        $this->status = $_POST['status'];
        $this->db->update('todos', $this, array('id' => $_POST['id']));
    }

    public function dbDeleteMod()
    {
        $this->db->delete('todos', array('id' => $_POST['id']));
    }
}
