<?= get('message'); ?>

<form action="../public/pages/forms/create_user.php" method="POST" role="form">

	<div class="form-group">
		<label for="">Nome</label>
		<input type="text" class="form-control" name="name" ="" placeholder="Input field">
	</div>

		<div class="form-group">
		<label for="">Sobrenome</label>
		<input type="text" class="form-control" name="sobrenome" placeholder="Input field">
	</div>


	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">password</label>
		<input type="text" class="form-control" name="password" placeholder="Input field">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>