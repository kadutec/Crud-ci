<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
				<?php if(isset($servico)) : ?>
					<form action="<?= base_url() ?>servicos/update/<?= $servico["id_servico"] ?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>servicos/store" method="post">
				<?php endif; ?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required value="<?= isset($servico) ? $servico["nome"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="preco">Price</label>
							<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" required value="<?= isset($servico) ? $servico["preco"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="descricao">Descrição</label>
							<textarea name="descricao" id="descricao" rows="5" class="form-control" required><?= isset($servico) ? $servico["descricao"] : "" ?></textarea>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url(); ?>servicos" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
