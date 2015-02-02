<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('categorie_model');
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
	function update($id, $viewName)
	{
		$tekst = $this->input->post('tekst');
		$volgorde = $this->input->post('volgorde');
		$vet = $this->input->post('vet');
		$groter = $this->input->post('groter');
		$categorieId = $this->input->post('categorieId');
		$this->tekst_model->update($id, $tekst, $volgorde, $vet, $groter);
		$this->session->set_userdata( 'melding', 'Tekst aangepast.' );
		$partials = array('header' => 'header', 'content' => $viewName, 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	function delete($tekstId)
	{
		$this->db->delete('tekst', array('id' => $artikelId));
		$data['title'] = 'Verwijderd';
		$this->session->set_userdata( 'melding', 'Juweel verwijderd.' );
		$partials = array('header' => 'header_admin', 'content' => 'melding', 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
}
?>