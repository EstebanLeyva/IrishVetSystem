<!DOCTYPE html>
<html>
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

<body  topmargin="" leftmargin="160">

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


		<?php
		$id_mascota=$_REQUEST['id_mascota'];
		include("conexion.php");

		$query="SELECT * FROM mascotas WHERE id_mascota='$id_mascota'";
		$resultado= $conexion->query($query);
		$row=$resultado->fetch_assoc();
		?>


		<div align="center">
			<form action="nuevaConsulta.php" method="POST"></br></br>
				<div class="form-group">
					<label>ID PACIENTE</label>
					<input id="input" required name="id_m" value="<?php echo $row['id_mascota']; ?>" type="text"  class="form-control input-lg text-center" placeholder="ID_MASCOTA" readonly>
					<br>
					<label>NOMBRE PACIENTE</label>
					<input id="input" required name="name" value="<?php echo $row['nombre_mascota']; ?>" type="text"  class="form-control input-lg text-center" placeholder="NOMBRE PACIENTE" readonly>
					<br>
					<label>FECHA</label>
					<input id="input" required name="fecha" type="date"  class="form-control input-lg text-center" placeholder="FECHA">
					<br>
					
					<input id="input" required name="edad" type="text" class="form-control input-lg text-center" placeholder="EDAD">
					<br>
					
					<input id="input" required name="peso" type="text" class="form-control input-lg text-center" placeholder="PESO">
					<br>
					
					<input id="input" required name="temp" type="text" class="form-control input-lg text-center" placeholder="TEMPERATURA">
					<br>
					
					<textarea required name="diag" id="input" class="form-control" rows="7" placeholder="DIAGNOSTICO" ></textarea><br>
					
					<textarea required name="trata" id="input" class="form-control" rows="7" placeholder="TRATAMIENTO"></textarea><br>
					<label>PROXIMA CITA</label>
					<input id="input"  name="prox" type="date"  class="form-control input-lg text-center" placeholder="PROXIMA CITA"><br>
					
					<textarea name="mss" id="input" class="form-control" rows="7" placeholder="COMENTARIO"></textarea><br>
					<button id="AgrMascot" type="submit" class="btn btn-primary" ng-click="setView('vistaNuevaMascota')"  ><img alt="" src="lib/images/memorycard.png" height="40"/><span class="glyphicon glyphicon-save"></span> Guardar</button>
				</div>	
			</form>
		</div>

	</body>
</html>
