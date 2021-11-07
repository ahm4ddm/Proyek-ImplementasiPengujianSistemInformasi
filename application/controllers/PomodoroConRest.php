<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Faker\Core\Number;
use phpDocumentor\Reflection\Types\Integer;

class PomodoroConRest extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PomodoroMod');
    }

    public function index_post()
    {
        $data = [
            'totalwaktu' => 25
        ];
        $this->PomodoroMod->dbInitTimer($data);
        $dataRes = [
            'status' => true,
            'message' => 'waktu berhasil ditambahkan!'
        ];
        $this->response($dataRes, 201);
    }
    public function index_put()
    {
        $id = $this->put('id');
        $tablecon = $this->PomodoroMod->dbSelect($id);
        foreach ($tablecon as $row) {
            $row;
        }
        $data = [
            'id' => $id,
            'totalwaktu' => 25 + $row

        ];
        $this->PomodoroMod->dbUpdateTimer($data, $id);
        $dataRes = [
            'status' => true,
            'message' => 'waktu berhasil diperbarui!',
        ];
        $this->response($dataRes, 201);
    }
}
