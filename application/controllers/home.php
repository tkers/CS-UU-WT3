<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$profiles = $this->usermodel->getRandomProfiles(6);
		$dbg = array_merge($this->usermodel->getUserByID(2), $this->usermodel->getProfileByID(2));
	
		$data = array('profiles' => $profiles, 'dbg' => $dbg);
		$this->load->view('partials/header');
		if(!$this->session->userdata('userid'))
			$this->load->view('partials/promo');
		$this->load->view('home', $data);
		$this->load->view('partials/footer');
	}
}