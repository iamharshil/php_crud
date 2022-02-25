<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>PHP + MYSQL CRUD DEMO</h1>
	<p>Create, Read, Update and Delete records below</p>

	<table class="table">
		<tbody>
			<?php include 'read.php' ?>
		</tbody>
	</table>

	<form class="form-inline m-2" action="create.php" method="post">
		<label for="name">Name:</label>
		<input type="text" class="form-control m-2" id="name" name="name">
		<label for="score">Score:</label>
		<input type="number" class="form-control m-2" id="score" name="score">
		<button type="submit" class="btn btn-primary">Add</button>
	</form>
</div>
</body>
</html>

