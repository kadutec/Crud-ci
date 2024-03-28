<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manutencao extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		permission();
		$this->load->model("manutencoes_model");
		$this->load->model("servicos_model");
		$this->load->model("pecas_model");
		$this->load->model("users_model");
		$this->load->model("manutencao_detalhes_model");
	}

	public function index()
	{
		$manutencoes = $this->manutencoes_model->index();

		foreach ($manutencoes as &$manutencao) {
			$manutencao['nome'] = $this->users_model->show($manutencao['id_usuario'])['nome'];
		}
		$data["manutencoes"] = $manutencoes;
		$data["servicos"] = $this->servicos_model->index();
		$data["pecas"] = $this->pecas_model->index();
		$data["title"] = "Manutenções";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/manutencoes', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function new()
	{
		$data["title"] = "Manutenções";
		$data["servicos"] = $this->servicos_model->index();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-manutencoes', ['data' => $data]);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function show($id) {
		$data["title"] = "Detalhes";
        $data['manutencao'] = $this->manutencoes_model->show($id);
        $detalhes = $this->manutencao_detalhes_model->getItensByIdManutencao($id);
        
        $detalhes = $this->loadDetalhes($detalhes);
        
        $data['detalhes'] = $detalhes;

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
        $this->load->view('pages/detalhes', ['data' => $data]);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data); 
    }

	public function store() 
	{
		$usuario = $this->session->userdata("logged_user");
		$manutencao = $_POST;
		$total = $this->calcularTotalManutencao($manutencao);

		$model = $this->manutencoes_model->store([
			'id_usuario' => $usuario['id_usuario'],
			'total' => $total,
			'status' => 'pendente'
		]);

		$this->sync($manutencao, $model);

		redirect("manutencao");
	}


	public function edit($id)
	{
		$data["manutencao"] = $this->manutencoes_model->show($id);
		$data["title"] = "Atender Solicitação";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-manutencoes-edit', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		$manutencao = $_POST;
		$status = 'pendente';
		$this->manutencoes_model->update($id, $manutencao);
		redirect("manutencao");
	}


	public function delete($id)
	{
		$this->manutencoes_model->destroy($id);
		redirect("manutencao");
	}

	public function delete_manutencao($id) {
		$this->load->model('manutencao_detalhes_model');
		$this->manutencao_detalhes_model->destroy($id);
		
		$this->load->model('manutencoes_model');
		$this->manutencoes_model->destroy($id);
	
		redirect('manutencao');
	}

	protected function sync($manutencao, $model) {
		foreach ($manutencao['servico'] as $servico) {
			$id = explode(',', $servico);
			$servico = $this->servicos_model->show($id[0]);
			$peca = $this->pecas_model->show($servico['id_peca']);
			
			$this->manutencao_detalhes_model->store([
				'id_manutencao' => $model,
				'id_servico' => $servico['id_servico'],
				'preco_servico' => $servico['preco'],
				'id_peca' => $peca['id_peca'],
				'preco_peca' => $peca['preco']
			]);
		}
	}

	function calcularTotalManutencao($manutencao) {
		$totalPeca = 0;
		$totalServico = 0;

		foreach ($manutencao['servico'] as $servico) {
			$id = explode(',', $servico);
			$servico = $this->servicos_model->show($id[0]);
			$peca = $this->pecas_model->show($servico['id_peca']);

			$totalServico += $servico['preco'];
			$totalPeca += $peca['preco'];
		}

		$total = $totalPeca + $totalServico;
		return $total;
	}

	public function loadDetalhes($detalhes) {
		foreach ($detalhes as &$detalhe) {
            $servico = $this->servicos_model->show($detalhe['id_servico']);
            $peca = $this->pecas_model->show($detalhe['id_peca']);
            
            $detalhe['servico_nome'] = $servico['nome'];
            $detalhe['servico_preco'] = $servico['preco'];
            if ($peca !== null) {
				$detalhe['peca_nome'] = $peca['nome'];
				$detalhe['peca_preco'] = $peca['preco'];
			} else {
				$detalhe['peca_nome'] = 'N/A';
				$detalhe['peca_preco'] = 0;
			}
		}

		return $detalhes;
	}
}
