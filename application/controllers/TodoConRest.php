<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class TodoConRest extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TodoMod');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $notes = $this->TodoMod->dbReadMod();
        } else {
            $notes = $this->TodoMod->dbReadMod($id);
        }
        if ($notes) {
            $this->response($notes, 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kosong atau tidak ditemukan!'
            ], 404);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan, gagal dihapus!'
            ], 400);
        } else {
            if ($this->TodoMod->dbDeleteMod($id) > 0) {
                $data = [
                    'status' => true,
                    'id' => $id,
                    'message' => 'data berhasil dihapus!'
                ];
                $this->response($data, 202);
            } else {
                $data = [
                    'status' => false,
                    'id' => $id,
                    'message' => 'Id tidak ditemukan, gagal dihapus!'
                ];
                $this->response($data, 400);
            }
        }
    }

    function index_post()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'catatan' => $this->input->post('catatan'),
            'status' => $this->input->post('status')
        ];
        if ($this->TodoMod->dbCreateMod($data) > 0) {
            $dataRes = [
                'status' => true,
                'message' => 'data berhasil ditambahkan!'
            ];
            $this->response($dataRes, 201);
        } else {
            $dataRes = [
                'status' => false,
                'message' => 'data gagal ditambahkan!'
            ];
            $this->response($dataRes, 400);
        }
    }

    function index_put()
    {
        $id = $this->put('id');
        $data = [
            'judul' => $this->put('judul'),
            'catatan' => $this->put('catatan'),
            'waktu' => date('Y-m-d H:i:s'),
            'status' => $this->put('status')
        ];
        if ($this->TodoMod->dbUpdateMod($data, $id) > 0) {
            $dataRes = [
                'status' => true,
                'message' => 'data berhasil diubah!'
            ];
            $this->response($dataRes, 201);
        } else {
            $dataRes = [
                'status' => false,
                'message' => 'data gagal diupdate!'
            ];
            $this->response($dataRes, 400);
        }
    }
}
