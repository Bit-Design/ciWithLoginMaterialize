<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
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
		$tekst = $this->input->post('tekst');
		$volgorde = $this->input->post('volgorde');
		$vet = $this->input->post('vet');
		$groter = $this->input->post('groter');
		$this->tekst_model->update($id, $tekst, $volgorde, $vet, $groter);
		$this->session->set_userdata( 'melding', 'Tekst aangepast.' );
		$partials = array('header' => 'header', 'content' => $viewName, 'footer' => 'footer');
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
		$this->db->delete('tekst', array('id' => $artikelId));
		$data['title'] = 'Verwijderd';
		$this->session->set_userdata( 'melding', 'Juweel verwijderd.' );
		$partials = array('header' => 'header_admin', 'content' => $viewName, 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
}
?>