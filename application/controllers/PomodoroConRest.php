<?php

use chriskacerguis\RestServer\RestController;
use Faker\Core\Number;
use phpDocumentor\Reflection\Types\Integer;

defined('BASEPATH') or exit('No direct script access allowed');

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
            $this->PomodoroMod->addTime($data);
            echo true;
        } else {
            echo false;
        }
    }
}
