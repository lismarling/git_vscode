<?php 
include("con_bd.php");

if (isset($_POST['userp'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['clave']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $clave = trim($_POST['clave']);
	    
	    
		$consulta = "INSERT INTO logins (user, pass) VALUES ('$usuario', '$clave')";	   
		
	    $resultado = mysqli_query($conex,$consulta);
	     if($resultado) {
	    	
			header("Location: formulario4.php?error=Registrado correctamente");
		        exit();
	    } 
    }   else {
	    	
			header("Location: formulario4.php?error=Datos incorrectos");
		        exit();
     
         
    }
}

?>
	
	