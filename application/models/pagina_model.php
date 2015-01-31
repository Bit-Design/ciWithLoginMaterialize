<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pagina_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get($naam) {
		$this->db->where('naam', $naam);
		$query = $this->db->get('pagina');
		return $query->row();
	}
}