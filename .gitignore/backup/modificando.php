<!DOCTYPE HTML>
<!-- por Guerty Vera y Airan Carreño --> 
<!-- Facultad ingenieria de Sistemas -->
<!-- Limpiando Ando LTDA -->
<LINK REL="stylesheet" TYPE="text/css" HREF="sampletext.css">
<html>
<head>
<title>LIMPIANDO ANDO LTDA.</title>

</head>
<body background="limíeza.png">
<?php
		
		include("conexion.php");
		$cod = $_REQUEST['cod_articulo'];
		$query = "SELECT * FROM articulo WHERE cod_articulo = '$cod'";
        $resultado = $conexion->query($query);
	    $row = $resultado->fetch_assoc();
				
?>
		
<center>
<!-- esto es para modificar en la base de datos -->
<form action="modifico_proceso.php?cod_articulo=<?php echo $row['cod_articulo']; ?>" method ="POST" enctype="multipart/form-data">

<h1> Limpiando Ando Ltda. <h1>
<h2> Modificacion de Articulos </h2>
<!-- Etiquetas de insercion y botones de la pagina -->
<h3>codigo  <input type="Text" name="codigo" placeholder="codigo articulo.." value="<?php echo $row['cod_articulo']; ?>" /><br></h3>
<h3>Nombre  <input type="Text" name="nombre" REQUIRED placeholder="Nombre articulo.." value="<?php echo $row['nom_articulo']; ?>" /><br></h3>
<h3>Precio  <input type="Text" name="precio" REQUIRED placeholder="Precio articulo.." value="<?php echo $row['precio_articulo']; ?>" /><br></h3>
<h3>Cantidad <input type="Text" name="cantidad" REQUIRED placeholder="Cantidad articulo.." value="<?php echo $row['cant_articulo']; ?>" /><br></h3>
<h3>Condiciones uso <input type="Text" name="condicion"placeholder="Condiciones uso" value="<?php echo $row['condi_uso_articulo']; ?>" /><br></h3>
<h3>Fecha Vencimiento<input type="datetime" REQUIRED name="fecha"placeholder="AAAA-MM-DD" value="<?php echo $row['fecha_Venc_articulo']; ?>" /><br></h3>
<h3>Categoria <input type="Text" name="categoria" REQUIRED placeholder="Elija Categoria.." value="<?php echo $row['categ_articulo']; ?>" /><br></h3>

<h3><img height= "90px" src="data:image/jpg;base64,<?php echo base64_encode($row['imag_articulo']); ?>" /> </h2>
Imagen    
<input type="file" REQUIRED name="imagen"/><br>
<br></br>

<input type="Submit" value="Modificar Articulo">
<table border="1">
<thead>
<th><input class="sampletext" type="submit" value="CATALOGO" onclick = "location='catalogo.php'"/></th>
</thead>
</table>
</form>

</center>


</body>
<center><div> Todos los derechos Reservados, Limpiando Ando LTDA. Copyright 2016</div></center>
</html>