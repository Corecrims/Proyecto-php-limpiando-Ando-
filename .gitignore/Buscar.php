<?php
include("conexion.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Busqueda de Articulos Limpiando Ando Ltda.</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("  ***************   ATENCION !!  ¿ Realmente desea eliminar  ese  Articulo ? ************** "))
    {
        return true;
    }
	alert("Eliminacion Cancelada !! ")
    return false;
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation1() {
    if(confirm(" ATENCION !! Se van a Modificar los datos de este Articulo, ¿Esta seguro de continuar ?"))
    {
        return true;
    }
    return false;
}
//-->
</script>
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

 <style>
          .thumb {
            height: 300px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>

<body background="fondos/limpiando.PNG">



<?php
		
    $row['cod_articulo'] = "";
    $row['nom_articulo'] = "";
	$row['precio_articulo'] = "";
	$row['cant_articulo'] = ""; 
	$row['condi_uso_articulo'] = "";
	$row['fecha_Venc_articulo'] = "";
	$row['categ_articulo'] = "";
	
	
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$cod=$_POST["txtbus"];
	if($btn=="Buscar"){
		
		include("conexion.php");
		$cod = $_POST['txtbus'];
		$query = "SELECT * FROM articulo WHERE cod_articulo = '$cod' OR nom_articulo = '$cod' ";
		$resultado = $conexion->query($query);
	    $row = $resultado->fetch_assoc();
		if ($cod == $row['nom_articulo'] || $cod == $row['cod_articulo']){
			
		}else{
			 print '<script language="JavaScript">'; 
             print 'alert(" No se han encontrado registros con ese codigo");'; 
            print '</script>'; 
		}
		 
		
	}
	
}
?>



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
<section>
<center ><a class="btn btn-primary btn-lg" style=" font-size: 30px; background: Black;"disabled role="main"> ----------- Busqueda de Articulos  -------------   </a></center>
  <div class="jumbotron text-center" style="background-color: rgba(100, 100, 128, 0.5); text-align:center; margin: 0 auto; text-align: left; "> 
  <table width="200" border="1" background="fondos/azul.PNG" style="text-align:center; margin: 0 auto; text-align: left;  ">
  <tbody>
    <tr>
      <td><div>
	  <form action="" method ="POST" enctype="multipart/form-data"  >
    <table width="893" height="442" border="0" >
      <tbody>
        <tr>
          <td width="226">&nbsp;</td>
          <td width="270">&nbsp;</td>
          
		  
		  </tr>
        <tr>
          <td><span class="label label-default">Ingrese codigo  o nombre del articulo    :</span></td>
          <td><input type="Text" maxlength="20" name="txtbus" REQUIRED placeholder=".." value=""/></td>
          
        </tr>
		  
		  <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
		  <tr>
          <td><span class="label label-default">Codigo Articulo</span></td>
          <td><input type="Text" maxlength="20" disabled name="codigo" REQUIRED placeholder=".." value="<?php echo $row['cod_articulo']; ?>"/></td>
          
        </tr>
		  
		  <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        </tr>
        <tr>
          <td><span class="label label-default">Nombre Articulo</span></td>
          <td><input type="Text" maxlength="20" disabled name="nombre" REQUIRED placeholder="..." value="<?php echo $row['nom_articulo']; ?>"/></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Precio Articulo</span></td>
          <td> <input type="Text"  name="precio"  disabled size="10"  maxlength="5" REQUIRED placeholder="$" value="<?php echo $row['precio_articulo']; ?>" /></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        
        </tr>
        <tr>
          <td><span class="label label-default">Cantidad Articulos</span></td>
          <td><input type="Text" name="cantidad" disabled size="10" maxlength="5" REQUIRED placeholder="0." value="<?php echo $row['cant_articulo']; ?>" /></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Condiciones de Uso</span></td>
          <td><textarea REQUIRED cols="30" rows="3" disabled name="condicion" id="textarea" name="texto" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" ><?php echo $row['condi_uso_articulo']; ?> </textarea></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Fecha Vencimiento</span></td>
          <td><input type="date"  id="datepicker" disabled  min=<?php $hoy=date("Y-m-d"); echo $hoy;?> name="fecha" size="9px" value="<?php echo $row['fecha_Venc_articulo'];?>" ></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Escoger Categoria</span></td>
		  
          <td>
		  <br></br>
		  <!--<select id="categoria" onchange="this.form['categoriaf'].value=this.value"> </select> -->
		  
		  <input type="Text" maxlength="20" size="10" disabled readonly id="categoria" name="categoriaf" REQUIRED placeholder="..." value="<?php echo $row['categ_articulo']; ?>" ></td>                                                                                      </td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
		  <input style="" type="Submit" value="Buscar" name="btn1" >
		  <input type="button" name="Cancelar" value="Cancelar" onClick="location.href='http://localhost/LimpiandoAndoLtda/app/index.html'">
		  <a class="btn btn-primary btn-lg1" role="main" style="background: Silver;" href="modificando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>">Modificar</a>
		  <a class="btn btn-danger" onClick="return confirmation()" href="Eliminando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>" >Eliminar </a>
		  </td>
        </tr>
      </tbody>
    </table>
    </div></td>
      <td><div>
      
	  <img height= "90px" src="data:image/jpg;base64,<?php echo base64_encode($row['imag_articulo']); ?>" />
       <output id="list" size="100" style="width:50px height=50px" ></output>
       <!-- <input  id="files" type="file" size="200" style="width:50% height=50%" REQUIRED name="imagen" /> -->
	   <span class="label label-info" style="background-color= Blue; color: white; "> ____ Imagen del Articulo Actual _____ </span>
    </form>  </div></td>
    </tr>
  </tbody>
</table>
  </div>
</section>

<section>
  
</section>



<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<!-- esto es para mostrar la imagen escogida -->
<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
	  
	  <script> 
contenido_textarea = "" 
num_caracteres_permitidos = 100 

function valida_longitud(){ 
   num_caracteres = document.forms[0].condicion.value.length 

   if (num_caracteres > num_caracteres_permitidos){ 
      document.forms[0].condicion.value = contenido_textarea 
   }else{ 
      contenido_textarea = document.forms[0].condicion.value	
   } 

   if (num_caracteres >= num_caracteres_permitidos){ 
      document.forms[0].caracteres.style.color="#ff0000"; 
   }else{ 
      document.forms[0].caracteres.style.color="#000000"; 
   } 

   cuenta() 
} 
function cuenta(){ 
   document.forms[0].caracteres.value=document.forms[0].texto.value.length 
} 
</script>
<div class="section well" style="background-color: rgba(100, 100, 128, 0.9)">
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