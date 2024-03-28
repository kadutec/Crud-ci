<div class="container-fluid">
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h2 class="h2">Todos os nossos usuários</h2>
			<?php 
				if(isset($_SESSION['logged_user'])) {
					if($_SESSION['logged_user']['tipo'] == 'admin') {
						echo '<div class="btn-group mr-2">
							<a href="' . base_url() . 'usuarios/new" class="btn btn-sm btn-light">Usuários <i class="fas fa-plus-square"></i></a>
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
					<?php foreach($usuarios as $usuario) : ?>
						<tr>
							<td><?= $usuario['id_usuario'] ?></td>
							<td><?= $usuario['nome'] ?></td>
							<td><?= $usuario['email'] ?></td>
							<td><?= $usuario['tipo'] ?></td>
							<td>
							<?php 
								if(isset($_SESSION['logged_user'])) {
									if($_SESSION['logged_user']['tipo'] == 'admin') {
										echo '<a class="btn btn-sm btn-warning" href="' . base_url() . 'usuarios/edit/' . $usuario["id_usuario"] . '">
										<i class="fas fa-pencil-alt"></i></a>';
										echo ' <a class="btn btn-sm btn-danger" href="javascript:goDelete(' . $usuario["id_usuario"] . ')">
										<i class="fas fa-trash-alt"></i></a>';
									}
								}   
							?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			
			<div class="container-fluid d-flex justify-content-end">
				
			</div>
		</div>
	</main>
	<script>
		function goDelete(id){
			var myUrl = 'usuarios/delete/'+id
			if(confirm("Deseja realmente apagar esse registro?")){
				window.location.href = myUrl
				redirect("usuarios")
			} else {
				alert("Registro não alterado!")
				return false;
			}
		}
	</script>
</div>
