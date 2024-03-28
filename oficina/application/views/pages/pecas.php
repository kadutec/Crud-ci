<div class="container-fluid">
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h2 class="h2">Todas as nossas peças</h2>
			<?php 
				if(isset($_SESSION['logged_user'])) {
					if($_SESSION['logged_user']['tipo'] != 'cliente') {
						echo '<div class="btn-group mr-2">
							<a href="' . base_url() . 'pecas/new" class="btn btn-sm btn-light">Peças <i class="fas fa-plus-square"></i></a>
							</div>';
					}
				}
			?>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Preço</th>
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($pecas as $peca) : ?>
						<tr>
							<td><?= $peca['id_peca'] ?></td>
							<td><?= $peca['nome'] ?></td>
							<td><?= "R$". $peca['preco'] ?></td>
							<td><?= $peca['descricao'] ?></td>
							<td>
							<?php 
								if(isset($_SESSION['logged_user'])) {
									if($_SESSION['logged_user']['tipo'] != 'cliente') {
										echo '<a class="btn btn-sm btn-warning" href="' . base_url() . 'pecas/edit/' . $peca["id_peca"] . '">
										<i class="fas fa-pencil-alt"></i></a> ';
										echo ' <a class="btn btn-sm btn-danger" href="javascript:goDelete(' . $peca["id_peca"] . ') ">
										 <i class="fas fa-trash-alt"> </i></a>';
									}
								}   
							?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</main>
	<script>
		function goDelete(id){
			var myUrl = 'pecas/delete/'+id
			if(confirm("Deseja realmente apagar esse registro?")){
				window.location.href = myUrl
				redirect("pecas")
			} else {
				alert("Registro não alterado!")
				return false;
			}
		}
	</script>
</div>
