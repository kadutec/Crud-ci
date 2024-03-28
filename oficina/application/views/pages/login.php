
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $title ?></title>
		<link rel="icon" href="<?= base_url()?>/assets/imgs/ci-logo.png" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

		<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<meta name="theme-color" content="#563d7c">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
			<form class="form-signin" method="post" action="<?= base_url()?>login/store">
						<h1 class="h3 mb-3 font-weight-normal">Please login</h1>
			
						<label for="inputEmail" class="sr-only">Email address</label>
							<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
							
						<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
							
						<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			
						<a href="<?= base_url();?>visit"><button type="button" class="btn btn-sm btn-terciary btn-block">Cancelar</button></a>
						<p class="mt-5 mb-3 text-muted">&copy; 2024</p>
					</form>
						<?php if($this->session->flashdata('erro')) : ?>
								<div class="alert alert-danger">Login ou senha inválidos</div>
						<?php endif?>
		</div>
</body>
</html>
