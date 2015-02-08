<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class openingsuren_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
		}
		function getAll() {
			$this->db->order_by('volgorde', 'asc');
			$query = $this->db->get('openingsuren');
			$openingsuren = $query->result();
			return $openingsuren;
		}
		function update($id, $uur)
		{
			$data = array(
				'uur' => $uur
				);
			$this->db->where('id', $id);
			$this->db->update('openingsuren', $data);
		}

	}?>