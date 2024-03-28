<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>
			<div class="col-md-12">
			<form action="<?= base_url(); ?>manutencao/store" method="post">

				<div class="col-md-6">
					<div class="form-group">
						<label for="servico">Serviço</label>
						<select class="form-control" name="servico[]" id="servico" required multiple>
							<option value="" readonly>Selecione um serviço</option>
							<?php
							foreach ($data["servicos"] as $servico) {
								echo "<option value='{$servico['id_servico']},{$servico['preco']}'>{$servico['nome']}</option>";
							}
							?>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
					<a href="<?= base_url(); ?>manutencao" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
				</div>
			</form>
			</div>
    	</main>
  	</div>
</div>
