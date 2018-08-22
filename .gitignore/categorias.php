
<?php
		
		include("conexion.php");

       $query = "SELECT * FROM categoria";
	   $resultado = $conexion->query($query);
	   
	   while ($row = mysqli_fetch_array($resultado)){
		   echo '<option value="'.$row['nom_categoria'].'" >'.$row['nom_categoria'].'</option>';
	   }
	   
	   
