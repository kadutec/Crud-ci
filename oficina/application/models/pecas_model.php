<?php 
	class Pecas_model extends CI_Model {
		public function index() {
			return $this->db->get("pecas")->result_array();
		}

		public function store($peca)
		{
			$this->db->insert("pecas", $peca);
		}

		public function show($id)
		{
			return $this->db->get_where("pecas", array(
				"id_peca" => $id
			))->row_array();
		}

		public function update($id, $peca)
		{
			$this->db->where("id_peca", $id);
			return $this->db->update("pecas", $peca);
		}

		public function destroy($id)
		{
			$this->db->where("id_peca", $id);
			return $this->db->delete("pecas");
		}
	}
?>
