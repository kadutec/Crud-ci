
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
			<?php if(isset($usuario)) : ?>
				<form class="form-signin" action="<?= base_url() ?>usuarios/update/<?= $usuario["id_usuario"] ?>" method="post">
			<?php else : ?>
				<form class="form-signin" action="<?= base_url(); ?>usuarios/store" method="post">
			<?php endif; ?>
				<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
				<label for="inputName" class="sr-only">Name</label>
				<input type="text" name="nome" id="inputName" class="form-control" placeholder="Your Name" required autofocus value="<?= isset($usuario) ? $usuario["nome"] : "" ?>">
			
				<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?= isset($usuario) ? $usuario["email"] : "" ?>">
			
				<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required value="<?= isset($usuario) ? $usuario["senha"] : "" ?>">
				<label for="inputTipe" class="sr-only">Tipo</label>
				<select name="tipo" id="inputType" class="form-control mb-3" required autofocus>
					<option value="">Select your access level</option>
					<option value="admin" <?= isset($usuario) && $usuario["tipo"] === "admin" ? "selected" : "" ?>>Admin</option>
					<option value="mecanico" <?= isset($usuario) && $usuario["tipo"] === "mecanico" ? "selected" : "" ?>>Mecânico</option>
					<option value="cliente" <?= isset($usuario) && $usuario["tipo"] === "cliente" ? "selected" : "" ?>>Cliente</option>
				</select>
				<button class="btn btn-lg btn-primary btn-block mb-2" type="submit">
					<?php if(isset($usuario)) {
						echo "Update your account";
					} else {
						echo "Signin";
					}
					?>
				</button>
				<a href="<?= base_url();?>usuarios"><button type="button" class="btn btn-sm btn-terciary btn-block">Cancelar</button></a>
				<p class="mt-5 mb-3 text-muted">&copy; 2024</p>
			</form>
		</div>
</body>
</html>

