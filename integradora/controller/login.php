<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];

	require_once("../model/claseconexion.php");
	$obj = new Connection();
	$obj = $obj->login($correo,$contraseña);

	echo json_encode(["estado"=>$obj]);
}