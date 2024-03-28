<div class="container-fluid">
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h2 class="h2">Detalhes da manutenção</h2>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Serviços</th>
						<th>Peças</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($data['detalhes'] as $detalhes) : ?>
					<tr>
						<td><?= $detalhes['id_servico'].' - '. $detalhes['servico_nome'].' - R$ '.$detalhes['preco_servico']?></td>
						<td><?= $detalhes['id_peca'].' - '. $detalhes['peca_nome'].' - R$ '.$detalhes['peca_preco'] ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			</div>
			<div class="col-md-6">
			<a href="<?= base_url(); ?>manutencao" class="btn btn-secondary btn-xs">
				<i class="fas fa-arrow-left"></i> Voltar
			</a>
				</div>
		</div>
	</main>
</div>

