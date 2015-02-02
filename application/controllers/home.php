<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('tekst_model');
		}
		public function index()
		{
			$data['title'] = 'Home';
			$data['teksten'] = $this->tekst_model->getAllByPagina($data['title']);
			$partials = array('header' => 'header', 'content' => 'home', 'footer' => 'footer');
			$this->template->load('master', $partials, $data);
		}
		public function overons()
		{
			$data['title'] = 'Over ons';
			$data['teksten'] = $this->tekst_model->getAllByPagina($data['title']);
			$partials = array('header' => 'header', 'content' => 'overons', 'footer' => 'footer');
			$this->template->load('master', $partials, $data);		
		}
	}