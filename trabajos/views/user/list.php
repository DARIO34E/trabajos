<main class="container ">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Usuarios</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Usuarios</h2>
			<a href="?controller=user&method=new" class="btn btn-warning">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-dark">
				<thead>
					<tr class="bg-info">
						<th>Id</th>
						<th>Nombres</th>
						<th>Email</th>
						<th>Estado</th>
						<th>Rol</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($users as $user): ?>
						<tr>
							<td><?php echo $user->id ?></td>
							<td><?php echo $user->name ?></td>
							<td><?php echo $user->email ?></td>
							<td><?php echo $user->status ?></td>
							<td><?php echo $user->role ?></td>
							<td>
								<a href="?controller=user&method=edit&id=<?php echo $user->id ?>" class="btn btn-success">Editar</a>
				      	
				      	<a href="?controller=user&method=delete&id=<?php echo $user->id ?>" class="btn btn-danger">Eliminar</a>	
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
