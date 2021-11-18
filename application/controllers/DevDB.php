<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

require_once 'vendor/autoload.php';

class DevDB extends CI_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function fakedbInsertUser()
    {
        for ($i = 0; $i < 200; $i++) {
            $faker = Faker\Factory::create();
            $this->nama = $faker->name();
            $this->username = $faker->userName();
            $this->email = $faker->email();
            $this->password = $faker->password(16, 16);
            $this->db->insert('users', $this);
        }
        echo "DONE";
    }

    public function fakedbInsertNote()
    {
        for ($i = 0; $i < 200; $i++) {
            $faker = Faker\Factory::create();
            $this->judul = $faker->sentence(rand(1, 6));
            $this->catatan = $faker->paragraph(rand(1, 10));
            $this->waktu = date('Y-m-d H:i:s');
            $this->status = 1;
            $this->db->insert('todos', $this);
        }
        echo "DONE";
    }
}
