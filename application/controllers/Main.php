<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< Updated upstream
		$this->load->view('main');
		$this->load->view('login');
=======
		if ($this->form_validation->run() == false) {
			$dataraw = $this->LeadMod->joins();
			$data = array(
				'leaderboard' => $dataraw,
				'username' => null,
				'totalwaktu' => null
			);
			$this->load->view('main', $data);
			$this->load->view('login', $data);
		} else {
			$dataraw = $this->LeadMod->joins();
			$data = array(
				'leaderboard' => $dataraw,
				'username' => null,
				'totalwaktu' => null
			);
			$this->load->view('main', $data);
			$this->load->view('login', $data);
		}
>>>>>>> Stashed changes
	}
}
