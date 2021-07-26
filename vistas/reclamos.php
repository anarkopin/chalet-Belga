<?php
   require_once('../recursos/conectar.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Libro de Reclamaciones</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		
		<div class="col-lg-12">
			<div class="container">
				<h1 class="text-center">Libro de reclamaciones</h1>
				<form class="col-12 col-sm-offset-3" method="POST">
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
					<div class="form-group">
						<label>Papá o Mamá *</label>
						<input type="text" class="form-control" placeholder="Ej. Luis" name="nombre_papa">
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
					<div class="container">
						<!-- Button to Open the Modal -->
						<button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#myModal">
							Enviar
						</button>

						<!-- The Modal -->
						<div class="modal" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">
								
									<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title">Disculpanos</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									
									<!-- Modal body -->
									<div class="modal-body">
										Sabemos que estas aquí porque algo te ha disgustado. Aunque tratamos de mejorar cada día para brindarte un mejor servicio... A veces surgen dificultades en el camino y todo lo expresado por ti, nos es útil para seguir avanzar como organizacion, donde tú, eres lo mas importante. 
										Responderemos tu reclamo lo mas rapido posible.
									</div>
									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="submit" class="btn btn-block btn-lg btn-primary" name="enviar">
											Confirmar envío
										</button>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>

				</form>
				<p>&nbsp;</p>
			</div>
		</div>
		
	</div>
</body>
</html>
<?php 	
    require_once('../recursos/agregar.php');
?>
