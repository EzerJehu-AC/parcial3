<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$idcita = $_POST['idcita'];

	require_once("../model/claseconexion.php");
	$obj = new Connection();
	$resultado = $obj->delete($idcita);

	echo $resultado;
}