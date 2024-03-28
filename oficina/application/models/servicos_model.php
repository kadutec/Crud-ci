<?php 
	class Servicos_model extends CI_Model {
		public function index() {
			return $this->db->get("servicos")->result_array();
		}

		public function store($servico)
		{
			$this->db->insert("servicos", $servico);
		}

		public function show($id)
		{
			return $this->db->get_where("servicos", array(
				"id_servico" => $id
			))->row_array();
		}

		public function update($id, $servico)
		{
			$this->db->where("id_servico", $id);
			return $this->db->update("servicos", $servico);
		}

		public function destroy($id)
		{
			$this->db->where("id_servico", $id);
			return $this->db->delete("servicos");
		}
	}
?>
