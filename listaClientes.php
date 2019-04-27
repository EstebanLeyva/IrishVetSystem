<!DOCTYPE html>
<html ng-app="app" ng-controller="AppController">
<head>
	<title>IRISH VET SYSTEM</title>
		<link rel="stylesheet" href="assets/css//estilo_registroC.css" type="text/css"/>
 		<!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />

		<!-- Font Awesome Stylesheet -->
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="lib/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="lib/css/estilo.css" type="text/css"/>
		<link rel="stylesheet" href="lib/css/estilo_entrada.css" type="text/css"/>

		<!--Icono en pestaña de navegacion -->
       <link rel="shortcut icon" href="lib/images/favicon.ico" />
	</head>

	<body background="Fondo_.png" leftmargin="160">

		<nav role="navigation"  id="colorNav">
			<ul>
				<li class="red">Inicio
					<a href="index.html"><img alt="Home" src="lib/images/irish_icon.png" height="40" title="Home"/></a>
				</li>
				<li class="green">Clientes
					<a href="#"><img alt="Sesión" src="lib/images/contacts.png" height="40" title="Clientes"/></a>
					<ul>
						<li><a href="formularioCliente.php">Registrar</a></li>
						<li><a href="listaClientes.php">Lista</a></li>
					</ul>
				</li>
				<li class="blue">Pacientes
					<a href="#"><img alt="Sesión" src="lib/images/mascotas.png" height="40" title="Mascotas"/></a>
					<ul>
						<li><a href="formularioPaciente.php">Registrar</a></li>
						<li><a href="listaPacientes.php">Lista</a></li>
					</ul>
				</li>
				<li class="yellow">Consulta
					<a href="#"><img alt="Consultas" src="lib/images/home.png" height="40" title="Consulta"/></a>
					<ul>
						<li><a href="formularioConsulta.php">Nueva</a></li>
					</ul>
				</li>				
			</ul>
		</nav>
		
		<br><br><br><br><br><br>



		<div class="col-sm-10 col-sm-offset-0">
			<legend>Clientes Registrados</legend>
			<table class="table table-striped">
				<tr class="info">
					<td></td>
					<td>ID </td>
					<td>Nombre </td>
					<td>Apellidos</td>
					<td>Telefono</td>
					<td>Email</td>
					<td>Dirección Postal  </td>
					<td>Nota</td>
					<td></td>
					<td><center>Agregar Paciente</center></td>
					<td><center>Lista Pacientes</center></td>
					<td></td>
					<td></td>
					<td><center>Actualizar Cliente</center></td>
					<td><center>Eliminar Cliente</center></td>	
				</tr>
			
				
				<?php
				include("conexion.php");

				$query="SELECT * FROM propietarios";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>
			
				<tr>
					<td></td>
					<td><?php echo $row['id_propietario'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['apellidos'];?></td>
					<td><?php echo $row['telefono'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['direccion'];?></tdzz>
					<td><?php echo $row['coment_client'];?></td>
					<td></td>
					<td>
						<center><a class="btn btn-sm btn-info" href="registroPaciente.php?id_propietario=<?php echo $row['id_propietario']; ?>" > <img alt="Home" src="lib/images/mascotas.png" height="40" title="Home"/> </a></center>
					</td>
					<td>
						<center><a class="btn btn-sm btn-primary" href="listaPacientesCliente.php?id_propietario=<?php echo $row['id_propietario']; ?>" > <img alt="Home" src="lib/images/browser.png" height="40" title="Home"/>  </a></center>
					</td>
					<td></td>
					<td></td>
					<td>
						<center><a class="btn btn-sm btn-warning" href="registroPaciente.php?id_propietario=<?php echo $row['id_propietario']; ?>" > <img alt="Home" src="lib/images/actualizar.png" height="40" title="Home"/> </a></center>
					</td>
					<td>
						<center><a class="btn btn-sm btn-danger" href="listaPacientesCliente.php?id_propietario=<?php echo $row['id_propietario']; ?>" > <img alt="Home" src="lib/images/delet.png" height="40" title="Home"/> </a></center>
					</td>
				
			
				<?php
					}
				?>
			</table>				
		</div>




		<script type="text/javascript" src="lib/js/angular.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="liv/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/js/angular.min.js" ></script>
	</body>
</html>