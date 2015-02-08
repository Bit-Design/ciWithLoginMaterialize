<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class tekst_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
		}

		function get($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('tekst');
			return $query->row();
		}

		function getAllByPagina($viewName) {
			$this->load->model('pagina_model');
			$pagina = $this->pagina_model->get($viewName);
			$this->db->order_by('volgorde', 'asc');
			$this->db->where('paginaId', $pagina->id);
			$query = $this->db->get('tekst');
			$teksten = $query->result();
			return $teksten;
		}
		function getNextVolgorde($paginaId){
			$this->db->select_max('volgorde');
			$this->db->where('paginaId', $paginaId);
			$query = $this->db->get('tekst');
			return $query->row()->volgorde + 1;
		}
		function insert($paginaId, $tekst, $vet, $groter)
		{
			//volgorde automatisch 1 hoger dan max
			$data = array(
				'paginaId' => $paginaId,
				'tekst' => $tekst,
				'volgorde' => $this->getNextVolgorde($paginaId),
				'groter' => $groter,
				'vet' => $vet
				);
			$this->db->insert('tekst', $data);
			return $this->db->insert_id();
		}
		function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('tekst');
		}
		function update($id, $tekst, $vet, $groter)
		{
			$data = array(
				'tekst' => $tekst,
				'vet' => $vet,
				'groter' => $groter
				);
			$this->db->where('id', $id);
			$this->db->update('tekst', $data);
		}

	}?>