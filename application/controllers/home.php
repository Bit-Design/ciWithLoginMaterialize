<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tekst_model');
		$this->load->model('openingsuren_model');
	}
	public function index()
	{
		$data['title'] = 'Delta Lloyd Kampenhout';
		$data['viewName'] = 'home';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$data['openingsuren'] = $this->openingsuren_model->getAll();
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function assurmifid()
	{
		$data['title'] = 'AssurMiFID-gedradgsregels';
		$data['viewName'] = 'assurmifid';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function beleggen()
	{
		$data['title'] = 'Beleggen';
		$data['viewName'] = 'beleggen';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function beleggingsverzekeringen()
	{
		$data['title'] = 'Beleggingsverzekeringen';
		$data['viewName'] = 'beleggingsverzekeringen';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function contact()
	{
		$data['title'] = 'Contact';
		$data['viewName'] = 'contact';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function leningen()
	{
		$data['title'] = 'Leningen';
		$data['viewName'] = 'leningen';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function overons()
	{
		$data['title'] = 'Over ons';
		$data['viewName'] = 'overons';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$data['openingsuren'] = $this->openingsuren_model->getAll();
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}

	public function sparen()
	{
		$data['title'] = 'Sparen';
		$data['viewName'] = 'sparen';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function vermogensbeheer()
	{
		$data['title'] = 'Vermogensbeheer';
		$data['viewName'] = 'vermogensbeheer';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function verzekeringenkmos()
	{
		$data['title'] = "Verzekeringen - KMO's";
		$data['viewName'] = 'verzekeringenkmos';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function verzekeringenparticulieren()
	{
		$data['title'] = "Verzekeringen - Particulieren";
		$data['viewName'] = 'verzekeringenparticulieren';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function webbanking()
	{
		$data['title'] = "Webbanking";
		$data['viewName'] = 'webbanking';
		$data['teksten'] = $this->tekst_model->getAllByPagina($data['viewName']);
		$partials = array('header' => 'header', 'content' => $data['viewName'], 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
}