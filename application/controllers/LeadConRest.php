<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class LeadConRest extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('LeadMod');
    }

    function index()
    {
        $this->load->view('/main');
    }

    public function index_get()
    {
        $dataraw = $this->LeadMod->joins();
        $data = array(
            'leaderboard' => $dataraw
        );
        $this->load->view('main', $data);
        $this->load->view('login', $data);
    }
}
