<?php
class TodoMod extends CI_Model
{
    public $judul;
    public $catatan;
    public $waktu;
    public $status;

    public function getTodo($id)
    {
        return $this->db->get_where('todos', ['id_user' => $id])->result_array();
    }

    public function addTodo($data)
    {
        $this->db->insert('todos', $data);
        return $this->db->affected_rows();
    }

    public function delTodo($id)
    {
        $this->db->delete('todos', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updTodo($data, $id)
    {
        $this->db->update('todos', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
