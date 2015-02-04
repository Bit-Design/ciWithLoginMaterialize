<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pagina_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get($viewName) {
		$this->db->where('viewName', $viewName);
		$query = $this->db->get('pagina');
		return $query->row();
	}
}