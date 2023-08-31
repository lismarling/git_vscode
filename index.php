<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org"> <head>
<title>Inicio de sesion</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Hola desde git<br></h2>
        
               haciendo cambios 2 
        </a>
            
         </div>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Inicio de Applicacion<br></h2>
            <p>No tienes una cuenta</p>
            <a type="submit" href="formulario4.php" class="btn btn-success">
                Registrate
        </a>
            
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <form class="col-12" name="formulario" id="formulario" method="post" action="login.php">

<?php if (isset($_GET['error'])) { ?>
     <div class="alert alert-danger error" role="alert">
   <?php echo $_GET['error']; ?></div>
<?php } ?>

<div class="form-group" id="contra-group">
 <i class='bx bxs-user-check bx-sm bx-tada'></i>
<label for="nombre">USUARIO</label> 
<input type="text" class="form-control"  name="usuario" id="usuario" 
placeholder="Ingrese su usuario" >
    
</div>
   
<div class="form-group" id="contra-group">
    <i class='bx bxs-key bx-sm bx-tada'></i>         
<label for="Apellido"> CONTRASE&Ntilde;A</label>
<input type="password" class="form-control" name="clave" id="clave" 
placeholder="Ingrese su contrase&ntilde;a" > 

</div>

 <button type="submit" onclick="validaciones()" class="btn btn-dark" name="login" value="Login">

 </i> Iniciar sesi&oacuten</button>
</form>
            </div>
         </div>
      </div>

        <h6>No tiene una cuenta</h6>
     <a href="formulario4.php"> <i class='bx bxs-hand-right'></i> Reg&iacutestrate </a>
        </div>
       </div>
     </div>
     <style>
          body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
     </style>      
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
     <!-- Icons -->
<script src="js/feather.min.js"></script>


</body>
</html>