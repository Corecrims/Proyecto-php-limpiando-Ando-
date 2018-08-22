<?php

include("conexion.php");

//$cod = $_POST["codigo"];
$nom = $_POST["nombre"];
$pr = $_POST["precio"];
$cant = $_POST["cantidad"];
$con = $_POST["condicion"];
$fec = $_POST["fecha"];
$cat = $_POST["categoria"];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

if($cant < 0){ 	
  echo "Revise los datos la cantidad no puede ser negativa";
  print "<br/> \n";
	print "<br/> \n";
echo "<input type='button' value='Atras' onClick='history.go(-1);'>"; 
}elseif($pr <0){
	echo "Revise los datos la precio no puede ser negativo";
	print "<br/> \n";
	print "<br/> \n";
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}elseif(!is_numeric($pr)){
 echo "Revise los datos no pueden ser letras";
 print "<br/> \n";
	print "<br/> \n";
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}elseif(!is_numeric($cant)){
	echo "Revise los datos no pueden ser letras";
	print "<br/> \n";
	print "<br/> \n";
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}else {

  $query = "INSERT INTO articulo(	nom_articulo, precio_articulo, cant_articulo, condi_uso_articulo, fecha_Venc_articulo, categ_articulo, imag_articulo) VALUES ('$nom', '$pr', '$cant', '$con','$fec', '$cat', '$img')";


// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Creacion exitosa de articulo";
	echo "   ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: catalogo.php');
	
}
else{
	echo "No se pude Insertar nuevo Articulo";
}



}

?>