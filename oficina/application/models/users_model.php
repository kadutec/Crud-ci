<?php 
	class Users_model extends CI_Model {

		public function index() {
			return $this->db->get("usuarios")->result_array();
		}

		public function store($user)
		{
			$this->db->insert("usuarios", $user);
		}

		public function show($id)
		{
			return $this->db->get_where("usuarios", array(
				"id_usuario" => $id
			))->row_array();
		}

		public function update($id, $usuario)
		{
			$this->db->where("id_usuario", $id);
			return $this->db->update("usuarios", $usuario);
		}

		public function destroy($id)
		{
			$this->db->where("id_usuario", $id);
			return $this->db->delete("usuarios");
		}
	}

?>
