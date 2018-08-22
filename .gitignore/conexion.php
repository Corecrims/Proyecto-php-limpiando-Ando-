<?php
// por Guerty Vera y Airan Carreño 
// Facultad ingenieria de Sistemas
//Limpiando Ando LTDA

// este archivo php cumple la funcion de conectar con la base de datos en mysql
// esto es para conectarse a la base de datos con usuario y contraseña
$conexion = new mysqli("localhost","root","","ando")or die("Error Conexion") ;


// este if valida la conexion a la base de datos
if($conexion){
//	echo "Se ha conectado a la base de datos";
	
}
else{
	echo "Conexion Fallida a la base de datos";
}

?>