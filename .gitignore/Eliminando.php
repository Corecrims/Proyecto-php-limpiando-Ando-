<?php

include("conexion.php");

$cod = $_REQUEST['cod_articulo'];



$query = "DELETE FROM articulo WHERE cod_articulo = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Articulo Borrado <br/> \n ";
	echo $cod;
	echo " Se ha eliminado ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: catalogo.php');
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>