<?php

include("conexion.php");

$cod = $_REQUEST['cod_articulo'];

//$cod = $_POST["codigo"];
$nom = $_POST['nombre'];
$pr = $_POST['precio'];
$cant = $_POST['cantidad'];
$con = $_POST['condicion'];
$fec = $_POST['fecha'];
$cat = $_POST['categoriaf'];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "UPDATE articulo SET nom_articulo='$nom',
                              precio_articulo='$pr',
							  cant_articulo='$cant',
							  condi_uso_articulo='$con',
							  fecha_Venc_articulo='$fec',
							  categ_articulo='$cat',
							  imag_articulo='$img' WHERE cod_articulo = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "El articulo <br/> \n ";
	echo $cod;
	echo " Se ha modificado exitosamente ";
	print "<br/> \n";
	print "<br/> \n";
	//header('Location: catalogo.php');
	header('Location: solomodificar.php');
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>