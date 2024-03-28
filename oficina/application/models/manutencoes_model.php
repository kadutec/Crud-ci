<?php 
	class Manutencoes_model extends CI_Model {
		public function index() {
			return $this->db->get("manutencoes")->result_array();
		}

		public function store($manutencao)
		{
			$this->db->insert("manutencoes", $manutencao);
			return $this->db->insert_id();
		}

		public function show($id)
		{
			return $this->db->get_where("manutencoes", array(
				"id_manutencao" => $id
			))->row_array();
		}

		public function update($id, $manutencao)
		{
			$this->db->where("id_manutencao", $id);
			return $this->db->update("manutencoes", $manutencao);
		}

		public function destroy($id)
		{
			$this->db->where("id_manutencao", $id);
			return $this->db->delete("manutencoes");
		}
	}
?>
