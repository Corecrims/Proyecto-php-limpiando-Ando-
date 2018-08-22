<?php
$cn=mysql_connect("localhost","root","","ando")or die("Error en Conexion");
$db=mysql_select_db("ando")or die("Error en Db");
return($cn);
return($db);
?>