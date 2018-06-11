<!DOCTYPE html>
<html>
<head>
	<title>Listado</title>
</head>
<body>

	<!--<h1>Listado de los clientes</h1>-->
	<a href="clientes/create">Nuevo cliente</a>

	<table>
		<caption>Listado de los clientes</caption>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>N° Dni</th>
				<th>Fecha de nacimiento</th>
				<th>Genero</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($clientes_list as $cliente)
				<tr>
					<td>{{ $cliente->persona->nombre }}</td>
					<td>{{ $cliente->persona->apellido }}</td>
					<td>{{ $cliente->persona->dni }}</td>
					<td>{{ $cliente->persona->fecha_nacimiento }}</td>
					<td>{{ $cliente->persona->genero }}</td>
					<td>{{ $cliente->fecha_alta }}</td>
					<td>{{ $cliente->activo}}</td>
					<td>
						<a href="clientes/{{ $cliente->id }}/edit">Modificar</a> - 
				    	<a href="clientes/{{ $cliente->id }}">Eliminar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>