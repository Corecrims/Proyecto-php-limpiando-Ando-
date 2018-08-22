<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Modificando Limpiando Ando Ltda.</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
$(document).ready(function()
{
    $( ".datepicker-input" ).datepicker( "option", "yearRange", "-99:+0" );
    $( ".datepicker-input" ).datepicker( "option", "maxDate", "+0m +0d" );
});
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
<center ><a class="btn btn-primary btn-lg" style=" font-size: 30px; background: Silver;" role="main">         Creacion de  Articulos    	 </a></center>

  <div class="jumbotron text-center"  style="background-color: rgba(100, 100, 128, 0.5); text-align:center; margin: 0 auto; text-align: left; " > 
  <table width="200" border="1" background="fondos/verde.PNG " style="text-align:center; margin: 0 auto; text-align: left; ">
  <tbody>
    <tr>
      <td><div ><form action="guardando.php" method ="POST" enctype="multipart/form-data">
    <table width="893" height="442" border="0" >
      <tbody>
        <tr>
          <td width="226">&nbsp;</td>
          <td width="270">&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default" >Nombre Articulo</span></td>
          <td><input type="Text" maxlength="20" name="nombre" REQUIRED placeholder="..." value="" /></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Precio Articulo</span></td>
          <td> <input type="Text"  name="precio" size="10"  maxlength="5" REQUIRED placeholder="$" value="" /></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        
        </tr>
        <tr>
          <td><span class="label label-default">Cantidad Articulos</span></td>
          <td><input type="Text" name="cantidad"  size="10" maxlength="5" REQUIRED placeholder="0." value="" /></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Condiciones de Uso</span></td>
          <td><textarea REQUIRED cols="30" rows="3" id="textarea" name="textarea" placeholder="Describa el Articulo aqui..." onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" ></textarea></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Fecha Vencimiento</span></td>
          <td><input type="date" id="datepicker" name="fecha" size="9px" value="" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> ></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Escoger Categoria</span></td>
          <td><select id="categoria" name="categoria"> </select></td>
          
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
		  <input style="width:70px height=70px" type="Submit" value="Almacenar nuevo Articulo">
		  <input type="button" name="Cancelar" value="Cancelar" onClick="location.href='http://localhost/LimpiandoAndoLtda/app/index.html'">
		  </td>
        </tr>
      </tbody>
    </table>
    </div></td>
      <td><div>
      <span class="label label-info">Imagen Seleccionada</span>
       <output id="list" size="100" style="width:50px height=50px" ></output>
       <input  id="files" type="file" size="200" style="width:50% height=50%" REQUIRED name="imagen" />
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
num_caracteres_permitidos = 1 

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
<div class="section well">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">¿QUIENES SOMOS ?</h3>
		  <h5>Limpiando Ando Ltda. , compañia de prodcutos de aseo soluciones inmediatas mediante nuestro catalogo de productos conozca nuestro portafolio.</h5>
		</div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">GET IN TOUCH</h3>
          <address class="text-center">
  <strong>MyCompany, Inc.</strong><br>
  Sunny Autumn Plaza, Grand Coulee,<br>
  CA, 91308-4075, US<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
</div>
    </div>
	</div>
</body>
</html>