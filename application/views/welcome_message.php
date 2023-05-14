<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Notify.me</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<form>
	<!-- Email input -->
	<div class="form-outline mb-4">
		<input type="email" id="form2Example1" class="form-control" />
		<label class="form-label" for="form2Example1">Email address</label>
	</div>

	<!-- Password input -->
	<div class="form-outline mb-4">
		<input type="password" id="form2Example2" class="form-control" />
		<label class="form-label" for="form2Example2">Password</label>
	</div>

	<!-- 2 column grid layout for inline styling -->
	<div class="row mb-4">
		<div class="col d-flex justify-content-center">
			<!-- Checkbox -->
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
				<label class="form-check-label" for="form2Example31"> Remember me </label>
			</div>
		</div>

		<div class="col">
			<!-- Simple link -->
			<a href="#!">Forgot password?</a>
		</div>
	</div>

	<!-- Submit button -->
	<button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

	<!-- Register buttons -->
	<div class="text-center">
		<p>Not a member? <a href="/register">Register</a></p>
		</button>
	</div>
</form>

</body>
</html>
