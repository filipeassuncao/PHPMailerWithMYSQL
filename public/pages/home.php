<a href="?page=create_user">Cadastrar user</a>

<h2>Página inicial</h2>

<?= get('message'); ?>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$users = all('users');
			foreach ($users as $user):
		 ?>
		<tr>
			<td><?= $user->id; ?></td>
			<td><?= $user->name; ?></td>
			<td><?= $user->email; ?></td>
			<td>
				<a href="../public/?page=edit_user&id=<?= $user->id;?>"class="btn btn-success">Editar</a>
			</td>
			<td>
				<a href="../public/?page=delete_user&id=<?= $user->id;?>"class="btn btn-danger">Deletar</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>