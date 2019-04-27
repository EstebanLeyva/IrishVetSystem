<?php
include("conexion.php");
	
	
	$name= $_POST['name'];
	$esp= $_POST['esp'];
	$raza= $_POST['raza'];
	$sexo= $_POST['sexo'];
	$color= $_POST['color'];
	$mss= $_POST['mss'];
	$id_p= $_POST['id_p'];
	
	$query="INSERT INTO mascotas(NOMBRE_MASCOTA, ESPECIE, RAZA, SEXO, COLOR, COMENT_MASC, ID_CLIENTE) VALUES('$name','$esp','$raza', '$sexo', '$color','$mss', '$id_p')";
	
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location: listaPacientes.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}


	
?>