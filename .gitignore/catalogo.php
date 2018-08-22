<!DOCTYPE HTML>
<!-- por Guerty Vera y Airan Carreño --> 
<!-- Facultad ingenieria de Sistemas -->
<!-- Limpiando Ando LTDA -->
<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Catalogo Limpiando Ando Ltda.</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">


</head>
<meta charset="utf-8">
<title>LIMPIANDO ANDO LTDA.</title>
<script   src="https://code.jquery.com/jquery-1.11.0.js"   integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw="   crossorigin="anonymous"></script>
<script type="Text/javascript">
$("document").ready(function(){
	
	//alert("listo el jquery");
	$( "#categoria" ).load( "categorias.php" );
})

</script>
<body background="fondos/limpiando.png" >

<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://localhost/LimpiandoAndoLtda/app/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
     
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          
        </div>
       <a class="btn btn-primary btn-lg1" disabled role="main">       Limpiando Ando Ltda.    </a>
      </form>
</div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<center>
 <div class="media">
          
            <button type="button" class="btn btn-danger" style="background= silver; " onclick = "location='http://localhost/LimpiandoAndoLtda/Crear.php'">Crear Nuevo Articulo </button> 
          &nbsp;</div>
        </div>
<br></br>
<br></br>
<br></br>
<tr>
		    
		</tr>
<h1 <a class="btn btn-primary btn-lg" disabled style="background: lima;" role="main">  **************  Catalogo de Articulos Actuales  ****************  </a>   </h1><br></br>
<!-- esto es para enviar archivos a la base de datos -->
<table  border="5"  >
		<thead background="img/verde.png">
		<tr>
		    
		</tr>
		
		<tr>
		    <th><center>Codigo <br></br></center></th>
			<th><center>Articulo<br></br></center></th>
			<th><center>Precio<br></br></center></th>
			<th><center>Disponibles<br></br></center></th>
			<th><center>Condiciones de Uso<br></br></center></th>
			<th><center>Fecha Vencimiento<br></br></center></th>
			<th><center>Categoria<br></br></center></th>
			<th><center>Imagen<br></br></center></th>
			
		</tr>
		 
		</thead>
		
		<tbody background="img/cuadro.png" >
		
		<?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM articulo";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>		
			<tr>
			
			 <td> <center><h4><?php echo $row['cod_articulo']; ?></h4> </center></td>
			 <td> <?php echo $row['nom_articulo']; ?> </td>
			 <td> <?php echo $row['precio_articulo']; ?> </td>
			 <td> <?php echo $row['cant_articulo']; ?> </td>
			 <td> <?php echo $row['condi_uso_articulo']; ?> </td>
			 <td> <center><h4><?php echo $row['fecha_Venc_articulo']; ?></h4> </center> </td>
			 <td> <center><h5><?php echo $row['categ_articulo']; ?></h5> </center></td>
			 <td> <center> <img height= "200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imag_articulo']); ?>" /> </center></td>
			 <!--<th> <a class="btn btn-primary btn-lg1" role="main" style="background: Silver;" href="modificando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>">Modificar este Articulo</a> -->		 
			 <!-- <br></br><a href="Eliminando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>" >Eliminar este Articulo</a> </th> -->
			
			</tr>
			<?php
				
			}	
			?>
			
		
		
		
		</tbody>


</table>

</center>

<div class="section well" style="background-color: rgba(192, 192, 192, 0.7)">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">¿QUIENES SOMOS ?</h3>
		  <h5>Limpiando Ando Ltda. , compañia de prodcutos de aseo soluciones inmediatas mediante nuestro catalogo de productos conozca nuestro portafolio.</h5>
		</div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">LIMPIANDO ANDO LTDA</h3>
          <address class="text-center">
  <strong>Unipanamericana, Inc.</strong><br>
  Sunny Autumn Plaza, Grand Coulee,<br>
  CA, 91308-4075, US<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
</div>
    </div>
	</div>
	  <footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Limpiando Ando Ltda.. Todos los derechos Reservados 2016.</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>