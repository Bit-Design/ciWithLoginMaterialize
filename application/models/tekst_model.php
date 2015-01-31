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

		function getAllByPagina($paginaNaam) {
			$this->load->model('pagina_model');
			$pagina = $this->pagina_model->get($paginaNaam);
			$this->db->order_by('volgorde', 'asc');
			$this->db->where('paginaId', $pagina->id);
			$query = $this->db->get('tekst');
			$teksten = $query->result();
			return $teksten;
		}

	}