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

		<div align="center">
			<form action="nuevoPaciente.php" method="POST"></br></br>
				<div class="form-group">
					<H1 class="form-group" id="text_form">Registro Nuevo Paciente</H1><br>
					
					<input id="input" required name="id_p" type="text"  class="form-control input-lg text-center" placeholder="ID PROPIETARIO">
					<br>
					
					<input id="input" required name="name" type="text"  class="form-control input-lg text-center" placeholder="NOMBRE PACIENTE">
					<br>
					
					<input id="input" required name="esp" type="text"  class="form-control input-lg text-center" placeholder="ESPECIE">
					<br>
					
					<input id="input" required name="raza" type="text" class="form-control input-lg text-center" placeholder="RAZA">
					<br>
					
					<input id="input" required name="sexo" type="text" class="form-control input-lg text-center" placeholder="SEXO">
					<br>
					
					<input id="input" required name="color" type="text" class="form-control input-lg text-center" placeholder="COLOR">
					<br>
					
					<textarea name="mss" id="input" class="form-control" rows="7" placeholder="Comentario"></textarea><br>
					<a id="AgrMascot" type="submit" class="btn btn-primary" href="listaPacientes.php" ><img alt="" src="lib/images/memorycard.png" height="40"/><span class="glyphicon glyphicon-save"></span> Guardar </a>
				</div>
					
			</form>
		</div>
		
	</body>
</html>
