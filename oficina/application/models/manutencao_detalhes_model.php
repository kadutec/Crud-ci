<?php
	class Manutencao_detalhes_model extends CI_Model {
		public function index($id) {
			return $this->db->get('manutencao_detalhes')->result_array();
		}

		public function getItensByIdManutencao($id_manutencao) {
			$this->db->where('id_manutencao', $id_manutencao);
	
			$query = $this->db->get('manutencao_detalhes');
	
			return $query->result_array();
		}
		
		public function store($manutencao)
		{
			$this->db->insert("manutencao_detalhes", $manutencao);
		}

		public function destroy($id) {
			$this->db->where('id_manutencao', $id);
			return $this->db->delete('manutencao_detalhes');
		}
	}
?>
