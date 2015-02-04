<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tekst_model');
		$this->load->model('openingsuren_model');
	}


	public function index()
	{
		$data['title'] = 'Aanmelden';
		$partials = array('header' => 'header', 'content' => 'login', 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function aanmelden()
	{
		$this->load->model('user_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($this->authex->login($email, $password)){
			$data['melding'] = 'U bent nu aangemeld';
			$data['title'] = 'Delta Lloyd Kampenhout';
			$data['viewName'] = 'home';
			$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
			$data['openingsuren'] = $this->openingsuren_model->getAll();
			$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
			$this->template->load('master', $partials, $data);
		}else{
			$data['title'] = 'Aanmelden';
			$this->session->set_userdata( 'melding', 'Combinatie email en wachtwoord foutief.' );
			$partials = array('header' => 'header', 'content' => 'login', 'footer' => 'footer');
			$this->template->load('master', $partials, $data);

		}
	}
	public function loginNeeded(){
		$data['title'] = 'Aanmelden';
		$partials = array('header' => 'header', 'content' => 'login', 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}

	public function afmelden(){
		$this->authex->logout();
		redirect('home');
	}
}