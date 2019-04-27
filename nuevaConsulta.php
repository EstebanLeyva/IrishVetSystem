<?php
include("conexion.php");
	
	$id_m= $_POST['id_m'];
	$name= $_POST['name'];
	$fecha= $_POST['fecha'];
	$edad= $_POST['edad'];
	$peso= $_POST['peso'];
	$temp= $_POST['temp'];
	$diag= $_POST['diag'];
	$trata= $_POST['trata'];
	$prox= $_POST['prox'];
	$mss= $_POST['mss'];
	
	$query="INSERT INTO diagn(ID_MASCOTA, NOMBRE_MASC, FECHA, EDAD, PESO, TEMP, DIAGNOSTICO, TRATAMIENTO, PROX_CITA, COMENT_DIAGNO) VALUES('$id_m', '$name','$fecha','$edad', '$peso', '$temp','$diag', '$trata', '$prox', '$mss')";
	
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location: listaPacientes.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}


	
?>