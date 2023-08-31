<?php
include("con_bd.php");


if (isset($_POST['login'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['clave']) >= 1) 
    {
	    $usr = trim($_POST['usuario']);
	    $cla = trim($_POST['clave']); 
	      
	    $consulta = "SELECT * FROM logins WHERE user='$usr' and pass='$cla'";
		
		$resultado = mysqli_query($conex,$consulta);
   
	    //if ($resultado!=null) 
	    if($resultado->num_rows>0)
	    {	    	
	    session_start();   
    	$_SESSION["usuario"] = $usuario;

   	 # Luego redireccionamos a la página "Secreta"
  		header("Location: pagina.php");

          
	    } else {	    	
	    	
			header("Location: index.php?error=Usuario o contraseña incorrecta");
		        exit();   
	    }
	}
	
	}
?>
