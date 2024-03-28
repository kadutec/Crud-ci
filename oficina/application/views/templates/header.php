<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="icon" href="<?= base_url()?>/assets/imgs/ci-logo.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			background-image: url("<?= base_url()?>/assets/imgs/carro2.jpg");
			background-position: center;
			background-size: cover;
			color: white;
			text-shadow: 1px 1px 1px rgba(0,0,0,1);
			background-color: rgba(0, 0, 0, 0.5);
			height: 130vh;
			width: 100vw;
		}

		li, a, button {
			font-weight: 400;
			font-size: 16px;
			text-decoration: none;
		}

		header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			background-color: #1a1a1a;
			padding: 30px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
		}

		header a:first-child {
			padding-left: 50px;
		}

		header div {
			padding-right: 50px;
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
			height: 450px;
			padding-top: 150px;
			margin: 0 auto;
			opacity: 0.95;
		}

		h2 {
			background-color: rgba(0, 0, 0, 0.9);
    		padding: 10px;
			border-radius: 5px;
			-webkit-text-stroke-width: 0.3px;
    		-webkit-text-stroke-color: black;
		}
	</style>
</head>
<body data-bs-theme="dark">
