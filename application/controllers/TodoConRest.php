<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class TodoConRest extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TodoMod');
        $this->input->is_ajax_request();
        $this->load->library('session');
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
    }

    public function index_get()
    {
        $id = $this->session->userdata('id');
        $notes = $this->TodoMod->dbReadMod($id);
        if ($notes) {
?>
            <?php foreach ($notes as $nt) { ?>
                <li>
                    <span class="text"><?php echo $nt['judul']; ?></span> <br>
                    <span class="text"><?php echo $nt['catatan']; ?></span> <br>
                    <i id="removeBtn" class="icon fa fa-trash" data-id="<?php echo $nt['id']; ?>"></i> <br>
                <?php } ?>
                </li>
    <?php
        } else {
            echo "<li><span class='text'>No Record Found.</span></li>";
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
        $id = $this->session->userdata('id');
        $data = [
            'id' => $id,
            'judul' => $this->input->post('judul'),
            'catatan' => $this->input->post('catatan'),
            'status' => $this->input->post('status')
        ];
        if ($this->TodoMod->dbCreateMod($data, $id) > 0) {
            echo 1;
            // $dataRes = [
            //     'status' => true,
            //     'message' => 'data berhasil ditambahkan!'
            // ];
            // $this->response($dataRes, 201);
        } else {
            echo 0;
            // $dataRes = [
            //     'status' => false,
            //     'message' => 'data gagal ditambahkan!'
            // ];
            // $this->response($dataRes, 400);
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
