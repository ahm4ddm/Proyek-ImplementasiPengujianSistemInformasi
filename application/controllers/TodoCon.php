<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TodoCon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TodoMod');
    }

    public function index()
    {
        $res = $this->TodoMod->dbReadMod();
        $notes = array(
            'res' => $res
        );
        $this->load->view('note', $notes);
    }

    function dbCreateCon()
    {
        return $this->TodoMod->dbCreateMod();
    }

    function dbReadCon()
    {
        $this->TodoMod->dbReadMod();
    }

    function dbUpdateCon()
    {
        return $this->TodoMod->dbUpdateMod();
    }

    function dbDeleteCon()
    {
        return $this->TodoMod->dbDeleteMod();
    }
}
