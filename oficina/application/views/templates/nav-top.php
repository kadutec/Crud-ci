<header class="container-fluid d-flex justify-content-between align-items-center px-3 py-4">
	<a href="#"><img style="width: 30px" src="<?= base_url()?>/assets/imgs/ci-logo.png" alt="logo"></a>
	<nav class="navbar">
		<ul class="nav_links navbar-nav d-flex flex-row">
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>dashboard">Dashboard</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>servicos">Serviços</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>pecas">Peças</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>manutencao">Manutenção</a></li>
			<?php
				if(isset($_SESSION['logged_user'])) {
					if($_SESSION['logged_user']['tipo'] == 'admin') {
						echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'usuarios">Usuários</a></li>';
					}
				}
			?>
		</ul>
	</nav>
	<div>
		<a href="<?= base_url() ?>login/logout"><button type="submit" class="btn btn-primary">Logout</button></a>
	</div>
</header>
