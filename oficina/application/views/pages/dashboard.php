<div class="container-fluid">
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Serviços favoritos</h2>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Descrição</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach(array_slice($servicos, 0, 5) as $servico) : ?>
					<tr>
						<td><?= $servico['id_servico'] ?></td>
						<td><?= $servico['nome'] ?></td>
						<td><?= "R$".$servico['preco'] ?></td>
						<td><?= $servico['descricao'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Peças favoritas</h2>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach(array_slice($pecas, 0, 5) as $peca) : ?>
				<tr>
					<td><?= $peca['id_peca'] ?></td>
					<td><?= $peca['nome'] ?></td>
					<td><?= "R$". $peca['preco'] ?></td>
					<td><?= $peca['descricao'] ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	</main>
</div>

