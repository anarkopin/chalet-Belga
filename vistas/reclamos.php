<?php
   require_once('../recursos/conectar.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Libro de Reclamaciones</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Libro de reclamaciones</h1>
		<form class="col-sm-6 col-sm-offset-3" method="POST">
			<div class="form-group">
				<label>Nombre *</label>
				<input type="text" class="form-control" placeholder="Ej. Cesar" name="nombre">
			</div>
			<div class="form-group">
				<label>Apellido *</label>
				<input type="text" class="form-control" placeholder="Ej. Aquino Maximiliano" name="apellido">
			</div>
			<div class="form-group">
				<label>Dirección *</label>
				<input type="text" class="form-control" placeholder="Ej. Av. Los Angeles 1025" name="direccion">
			</div>
			<div class="form-group">
				<label>Distrito *</label>
				<input type="text" class="form-control" placeholder="Ej. Villa El Salvador" name="distrito">
			</div>
			<div class="form-group">
				<label>Documento de Identidad*</label>
				<select class="form-control" name="documento_identidad">
					<option>-Ninguno-</option>
					<option value="D.N.I.">D.N.I.</option>
					<option value="C.E.">C.E.</option>
					<option value="Menor de edad">Menor de edad</option>
				</select>
			</div>
			<div class="form-group">
				<label>N° doc. Identidad *</label>
				<input type="text" class="form-control" placeholder="Ej. 40125201" name="numero_documento">
			</div>
			<div class="form-group">
				<label>Correo electrónico *</label>
				<input type="email" class="form-control" placeholder="Ej. nombre@correo.com" name="correo">
			</div>
			<div class="form-group">
				<label>Teléfono alternativo *</label>
				<input type="text" class="form-control" placeholder="Ej. 1 294-0008" name="telefeno_alternativo">
			</div>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-md-3">Papá Mamá *</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Ej. Luis" name="nombre_papa">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Monto a reclamar (S/.)</label>
				<input type="text" class="form-control" placeholder="Ej. 200" name="monto_reclamo">
			</div>
			<label class="radio-inline">
				<input type="radio" name="tipo" value="producto" checked> Producto
			</label>
			<label class="radio-inline">
				<input type="radio" name="tipo" value="servicio"> Servicio
			</label>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea class="form-control" rows="5" name="descripcion"></textarea>
			</div>
			<input type="submit" class="btn btn-block btn-lg btn-primary" name="enviar">
		</form>
		<p>&nbsp;</p>

	</div>
</body>
</html>
<?php
    require_once('../recursos/agregar.php');
?>
