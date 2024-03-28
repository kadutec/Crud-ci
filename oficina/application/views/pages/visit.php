<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="icon" href="<?= base_url()?>/assets/imgs/ci-logo.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		li, a, button {
			font-weight: 500;
			font-size: 16px;
			text-decoration: none;
		}

		header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 30px;
			background-color: black;
			box-shadow: 10px 20px 10px rgba(0, 0, 0, 0.4);
			position: relative;
			z-index: 1;
		}

		header a:first-child {
			margin-left: 50px;
		}

		header div {
			margin-right: 50px;
		}

		.logo {
			cursor: pointer;

		}

		.nav_links {
			list-style: none;
		}

		.nav_links li {
			display: inline-flex;
			padding: 0 20px;
		}

		.nav_links li a {
			transition: all 0.3s ease 0s;
		}

		.nav_links li a:hover {
			color: #0088a9;
		}

		button {
			padding: 9px 25px;
			background-color: #0088a9;
		}

		main {
			height: 78vh;
			padding-top: 150px;
			margin: 0 auto;
		}

		.fundo {
			background-image: url("<?= base_url()?>/assets/imgs/carro1.jpg");
			background-position: center;
  			background-repeat: no-repeat;
			background-size: cover;
			color: white;
			text-shadow: 1px 1px 1px rgba(0,0,0,1);
		}

		footer {
			background-color: black;
			padding: 50px 0;
			box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.4);
			position: relative;
			z-index: 1;
		}
	</style>
</head>
<body data-bs-theme="dark">
	<header class="container-fluid d-flex justify-content-between align-items-center px-3 py-4">
	<a href="#"><img style="width: 30px" src="<?= base_url()?>/assets/imgs/ci-logo.png" alt="logo"></a>
		<div>
			<a href="<?= base_url();?>login" class="me-2"><button type="button" class="btn btn-outline-primary">Login</button></a>
		</div>
	</header>
	<div class="d-flex w-100 h-100 p-3 mx-auto flex-column fundo">
		<main class="px-3 mb-5">
			<h1 class="p-main">Car repair</h1>
			<p class="lead p-main" >Um espaço para reparo, mecânica e manutenção.</p>
			<p class="lead p-main" >Consulte nossos serviços e peças disponíveis!<br> Faça login para saber mais sobre a nossa empresa!</p>
			<p class="lead p-main">
				<a href="<?= base_url();?>login"><button type="button" type="submit" class="btn btn-primary btn-lg">Login</button></a>
			</p>
		</main>
	</div>
	<div class="container-fluid">
		<footer class="row justify-content-center">		
			<div class="col-md-auto">
				<h5>Atendimento</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2">Segunda à Sexta: 8:00am - 17:00pm</li>
					<li class="nav-item mb-2">Sábado: 8:00am - 12:00pm</li>
				</ul>
			</div>

			<div class="col-md-auto mx-5">
				<h5>Endereço</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2">Rua Lorem Ipsum Dolar 304 - CI</li>
				</ul>
			</div>
			<div class="col-md-auto mx-5">
				<p class="">Copyright &copy; 2024 Todos os Direitos Reservados.</p>
			</div>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
