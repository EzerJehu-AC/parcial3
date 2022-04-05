<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){
	
	$nombre = $_POST['nombre_paciente'];
	$fecha = $_POST['fecha'];
	$descripcion = $_POST['descripcion'];
	
	require_once("../model/claseconexion.php");
	$obj = new Connection();
	$resultado = $obj->crear_citas($descripcion,$nombre,$fecha);
	echo json_encode(["estado"=>$resultado]);
}