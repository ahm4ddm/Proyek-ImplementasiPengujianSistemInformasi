<?php
class TodoMod extends CI_Model
{
    public $judul;
    public $catatan;
    public $waktu;
    public $status;

    public function dbReadMod($id = null)
    {
        if ($id === null) {
            return $this->db->get('todos')->result_array();
        } else {
            return $this->db->get_where('todos', ['id' => $id])->result_array();
        }
    }

    public function dbCreateMod($data)
    {
        $this->db->insert('todos', $data);
        return $this->db->affected_rows();
    }

    public function dbDeleteMod($id)
    {
        $this->db->delete('todos', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function dbUpdateMod($data, $id)
    {
        $this->db->update('todos', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
