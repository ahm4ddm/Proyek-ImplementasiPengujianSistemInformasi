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
        $this->load->library('session');
        $this->load->model('PomodoroMod');
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
    }

    public function index_post()
    {
        $id = $this->session->userdata('id');
        if ($id !== null) {
            $data = [
                'totalwaktu' => 25,
                'tmpwaktu' => 25,
                'id_user' => $id,
            ];
            $this->PomodoroMod->dbInitTime($data);
            echo true;
        } else {
            echo 0;
        }
    }


    public function index_put()
    {
        $id = $usersraw = $this->session->userdata('id');
        if ($id === null) {
            $dataRes = [
                'status' => false,
                'message' => 'id tidak ditemukan, waktu gagal diperbarui!',
            ];
            $this->response($dataRes, 400);
        }
        $tablecon = $this->PomodoroMod->dbSelectTotalTime($id);
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
