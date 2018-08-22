<?php

include("conexion.php");

//$cod = $_POST["codigo"];

$cat = $_POST["categoria"];



  $query = "INSERT INTO categoria(	nom_categoria) VALUES ('$cat')";


// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Creacion exitosa de articulo";
	echo "   ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: gestion.php');
	
}
else{
	echo "No se pudo insertar categoria, errada o ya exsite";
}





?>