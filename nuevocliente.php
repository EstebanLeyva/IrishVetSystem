<?php
include("conexion.php");
	
	$name= $_POST['name'];
	$ape= $_POST['ape'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$dir= $_POST['dir'];
	$mss= $_POST['mss'];
	
	$query="INSERT INTO propietarios(NOMBRE, APELLIDOS, TELEFONO, EMAIL, DIRECCION, COMENT_CLIENT) VALUES('$name','$ape','$phone','$email','$dir','$mss')";
	
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location: listaClientes.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}


	
?>