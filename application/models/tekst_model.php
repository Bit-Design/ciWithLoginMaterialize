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
		function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('artikel');
		}
		function update($id, $tekst, $volgorde, $vet, $groter)
		{
			$data = array(
				'tekst' => $tekst,
				'volgorde' => $volgorde,
				'vet' => $vet,
				'groter' => $groter
				);
			$this->db->where('id', $id);
			$this->db->update('tekst', $data);
		}

	}