<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="{{asset('clientes')}}">

		<table>
			<tr>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</tr>
		</table>
		
		<tr>
			<td>Nombre:</td>
			<td>
				<input type="text" name="txtNombre">
			</td>
		</tr><br>	

		<tr>
			<td>Apellido:</td>
			<td>
				<input type="text" name="txtApellido">
			</td>
		</tr><br>	

		<tr>
			<td>N° Dni:</td>
			<td>
				<input type="text" name="txtDNI">
			</td>
		</tr><br>	

		<tr>
			<td>Fecha de nacimiento</td>
			<td>
				<input type="date" name="txtFechaNacimiento">
			</td>
		</tr><br>	

		<tr>
			<td>Fecha de alta</td>
			<td>
				<input type="date" name="txtFechaAlta">
			</td>
		</tr><br>	

		<tr>
			<td>Genero</td>
			<td>
				<select name="txtGenero">
					<option value="">Seleccione...</option>
					<option value="Femenino">Femenino</option>
					<option value="Masculino">Masculino</option>
				</select>
			</td>
		</tr><br>	

		<tr>
			<td>
				<input type="submit" value="Grabar">
				<input type="reset" value="Cancelar">
			</td>
		</tr>
	</form>

	<a href="/SGR/public/clientes">Listado</a>


</body>
</html>