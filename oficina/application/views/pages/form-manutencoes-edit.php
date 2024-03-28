<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>
			<div class="col-md-12">
			<form action="<?= base_url(); ?>manutencao/update/<?= $manutencao["id_manutencao"] ?>" method="post">

				<div class="col-md-6">
					<div class="form-group">
						<label for="status">Status</label>
						<select class="form-control" name="status" id="status" required>
							<option value="" readonly>Selecionar status da manutenção</option>
							<option value="pendente">Pendente</option>
							<option value="em progresso">Em progresso</option>
							<option value="concluido">Concluido</option>
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
