
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
		<legend>Pacientes Registrados</legend>
		<table class="table table-striped">
			<tr class="info">
				<td>ID Propietario</td>
				<td>ID Mascota</td>
				<td>Nombre Paciente </td>
				<td>Especie</td>
				<td>Raza </td>
				<td>Sexo</td>
				<td>Color </td>
				<td>Nota</td>
				<td>Accion</td>
				<td>Accion</td>
			</tr>
	
			
			<?php
			include("conexion.php");
			$id_propietario=$_REQUEST['id_propietario'];
			include("conexion.php");
			$query="SELECT * FROM mascotas WHERE id_cliente='$id_propietario'";
			
			$resultado= $conexion->query($query);
			while($row=$resultado->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['id_cliente'];?></td>
				<td><?php echo $row['id_mascota'];?></td>
				<td><?php echo $row['nombre_mascota'];?></td>
				<td><?php echo $row['especie'];?></td>
				<td><?php echo $row['raza'];?></td>
				<td><?php echo $row['sexo'];?></td>
				<td><?php echo $row['color'];?></tdzz>
				<td><?php echo $row['coment_masc'];?></td>
				<td><center><a class="btn btn-sm btn-info" href="registroConsulta.php?id_mascota=<?php echo $row['id_mascota']; ?>" ><img alt="Home" src="lib/images/consult.ico" height="40" title="Home"/>Nueva Consulta Médica</a></center></td>
				<td><center><a class="btn btn-sm btn-primary" href="listaConsultasPaciente.php?id_mascota=<?php echo $row['id_mascota']; ?>" > <img alt="Home" src="lib/images/folder.png" height="40" title="Home"/>Historial Clínico</a></center></td>
			</tr>
		
			<?php
				}
			?>
		</div>





	<script type="text/javascript" src="lib/js/angular.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="liv/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="lib/js/angular.min.js" ></script>
</body>
</html>