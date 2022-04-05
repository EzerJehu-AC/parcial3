<?php

if ($_SERVER['REQUEST_METHOD']=="GET"){
	require_once("../model/claseconexion.php");
	$obj = new Connection();
	$resultado = $obj->listar();
	echo json_encode($resultado);

}