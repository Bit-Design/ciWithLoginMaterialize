<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->model('tekst_model');
		$this->load->model('openingsuren_model');
		//------------------------------------security--------------------------------
		$this->load->helper(array('form', 'url'));
		if(!$this->authex->loggedIn()){
			$this->session->set_userdata( 'melding', 'Inloggen vereist.' );
			redirect('login/loginNeeded');
		}else{
			$user = $this->authex->getUserInfo();
			if(!$user->type == 'admin'){
				$this->session->set_userdata( 'melding', 'Admin rechten zijn nodig voor deze actie.');
				redirect('login/loginNeeded');
			}
		}
	}
	function index()
	{

	}
	function updateTekst($id, $viewName)
	{
		//unique id's and names needed for forms, hence add id's everywhere behind the name
		$tekst = $this->input->post('tekst' . $id);
		$vet = $this->input->post('vet' . $id);
		$groter = $this->input->post('groter' . $id);
		$this->tekst_model->update($id, $tekst, $vet, $groter);
		$this->session->set_userdata( 'melding', 'Paragraaf aangepast.' );
		$partials = array('header' => 'header', 'content' => $viewName, 'footer' => 'footer');
		$data['teksten'] = $this->tekst_model->getAllByPagina($viewName);
		$data['openingsuren'] = $this->openingsuren_model->getAll();
		$data['title'] = 'Paragraaf aangepast';
		$this->template->load('master', $partials, $data);
	}
	function insertTekst($viewName)
	{
		$tekst = $this->input->post('tekstplus');
		$vet = $this->input->post('vetplus');
		$groter = $this->input->post('groterplus');
		$this->load->model('pagina_model');
		$paginaId = $this->pagina_model->get($viewName)->id;
		$this->tekst_model->insert($paginaId, $tekst, $vet, $groter);
		$this->session->set_userdata( 'melding', 'Paragraaf toegevoegd' );
		$partials = array('header' => 'header', 'content' => $viewName, 'footer' => 'footer');
		$data['teksten'] = $this->tekst_model->getAllByPagina($viewName);
		$data['openingsuren'] = $this->openingsuren_model->getAll();
		$data['title'] = 'Paragraaf toegevoegd';
		$this->template->load('master', $partials, $data);
	}
	function updateUur($id)
	{
		$uur = $this->input->post('uur');
		$this->openinsuren_model->update($id, $uur);
		$this->session->set_userdata( 'melding', 'Uur aangepast.' );
		$partials = array('header' => 'header', 'content' => 'home', 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	function delete($tekstId, $viewName)
	{
		$this->db->delete('tekst', array('id' => $tekstId));
		$data['title'] = 'Verwijderd';
		$this->session->set_userdata( 'melding', 'Paragraaf verwijderd.' );
		$partials = array('header' => 'header', 'content' => $viewName, 'footer' => 'footer');
		$data['teksten'] = $this->tekst_model->getAllByPagina($viewName);
		$data['openingsuren'] = $this->openingsuren_model->getAll();
		$data['title'] = 'Paragraaf verwijderd';
		$this->template->load('master', $partials, $data);
	}
}
?>