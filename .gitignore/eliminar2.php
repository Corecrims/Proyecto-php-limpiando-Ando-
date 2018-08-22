<?php

include("conexion.php");

$cod = $_REQUEST['nom_categoria'];



$query = "DELETE FROM categoria WHERE nom_categoria = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "categoria se ha Borrado <br/> \n ";
	echo $cod;
	echo " Se ha eliminado ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: gestion.php');
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>