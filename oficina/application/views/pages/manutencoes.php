<div class="container-fluid">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Solicitar sua manutenção</h2>
            <?php
                if(isset($_SESSION['logged_user'])) {
                    if($_SESSION['logged_user']['tipo'] != 'mecanico') {
                        echo '<div class="btn-group mr-2">
                            <a href="' . base_url() . 'manutencao/new" class="btn btn-sm btn-light">Solicitar <i class="fas fa-plus-square"></i></a>
                            </div>';
                    }
                }
            ?>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID manutenção</th>
                        <th>ID Cliente</th>
						<th>Detalhes da Manutenção</th>
                        <th>Total</th>
						<th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($manutencoes as $manutencao) : ?>
                    <tr>
                        <td><?= $manutencao['id_manutencao'] ?></td>
                        <td><?= $manutencao['id_usuario'] .' - '. $manutencao['nome']?></td>
						<td>
						<?php if (isset($_SESSION['logged_user']) &&
							$manutencao['id_usuario'] == $_SESSION['logged_user']['id_usuario'] || $_SESSION['logged_user']['tipo'] != 'cliente')  : ?>
							<a class="btn btn-sm btn-warning" href="<?= base_url('manutencao/show/' . $manutencao["id_manutencao"]); ?>">Detalhes</a>
						<?php else: ?>
							<span class="text-muted">Não disponível</span>
						<?php endif; ?>

						</td>
                        <td><?='R$ '. $manutencao['total'] ?></td>
						<td><?= $manutencao['status'] ?></td>
                        <td>
                            <?php
                                if(isset($_SESSION['logged_user'])) {
									if(isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente') {
										echo '<a class="btn btn-sm btn-warning" href="' . base_url() . 'manutencao/edit/' . $manutencao["id_manutencao"] . '">Status 
									<i class="fas fa-pencil-alt"></i></a> ';
									}
									if(isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente') {
										echo '<button class="btn btn-danger btn-sm" onclick="goDelete(' . $manutencao['id_manutencao'] . ') ">Cancelar 	
											<i class="fas fa-trash-alt"></i>  
										</button>';
									}
									if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente' && $manutencao['status'] == 'concluido') {
										echo ' <button class="btn btn-success btn-sm btn-concluido" onclick="goDelete(' . $manutencao['id_manutencao'] . ')">Concluído
											<i class="fas fa-check"></i> 
										</button>';
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
        function goDelete(id) {
        var myUrl = '<?= base_url("manutencao/delete_manutencao/") ?>' + id;
        if (confirm("Você realmente concluiu a essa solicitação?")) {
            window.location.href = myUrl;
        } else {
            alert("Solicitação não alterada!");
        }
    }
    </script>
</div>
