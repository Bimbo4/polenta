  <?php
session_start();
    if(isset($_SESSION['activo'])){
        
    }

if (isset($_POST['login-submit'])) {
        //guarda los datos que se capturaron en las cajas de texto del formulario
        $Usuario="";
        $Contrasena="";
        //recibe los datos que devuelve metodo del web service
        $datos=array();
    
        //Verifica que tengan informacion
       
            $Usuario = htmlspecialchars($_POST['user']);
            $Contrasena = htmlspecialchars($_POST['pass']);

            //hace uso del servicio web que esta pulicando en el webhost
            $cliente = new SoapClient(null, array(
                'uri' => 'https://www.upmhworld.com/',
                'location' => 'https://www.upmhworld.com/polenta/servicioweb/wspolenta.php'
            ));
        
            //se ejecuta el metodo del servicio web, pasando sus parametros 
            $datos=$cliente->acceso($Usuario,$Contrasena);
            //hasta aqui ya recibieron los resultados del servicio web
        
            //verifica si encontro o no al usuario
            if((int)$datos[0]["CLAVE"]!= null){
	        //envia a la pagina principal de administrar
				echo '<script language="javascript">alert("Bienvenidos al sistema '.$datos[1]["NOMBRE"].', estas accediendo como '.$datos[4]["ROL"].'");</script>';
				if($datos[4]["ROL"]== 'Administrador'){
					echo "<script> document.location.href = 'paginas/admon/inicioAdm.php';</script>";
					session_start();
                	$_SESSION['activo'] = 1;
                	$_SESSION['CLAVE'] =  $datos[0]["CLAVE"];
                	$_SESSION['NOMBRE'] =  $datos[1]["NOMBRE"];
					$_SESSION['AP'] =  $datos[2]["AP"];
					$_SESSION['AM'] =  $datos[3]["AM"];
					$_SESSION['ROL'] =  $datos[4]["ROL"];
					$_SESSION['FOTO'] =  $datos[5]["FOTO"];
					$_SESSION['USUARIO'] =  $datos[6]["USUARIO"];
					$_SESSION['CORREO'] =  $datos[7]["CORREO"];
					$_SESSION['SEXO'] =  $datos[8]["SEXO"];
					$_SESSION['TEL'] =  $datos[9]["TEL"];
	    	    }else if($datos[4]["ROL"]== 'Cliente'){
					echo "<script> document.location.href = '?op=reservacion';</script>";
					session_start();
                	$_SESSION['activo'] = 1;
                	$_SESSION['CLAVE'] =  $datos[0]["CLAVE"];
                	$_SESSION['NOMBRE'] =  $datos[1]["NOMBRE"];
					$_SESSION['AP'] =  $datos[2]["AP"];
					$_SESSION['AM'] =  $datos[3]["AM"];
					$_SESSION['ROL'] =  $datos[4]["ROL"];
					$_SESSION['FOTO'] =  $datos[5]["FOTO"];
					$_SESSION['USUARIO'] =  $datos[6]["USUARIO"];
					$_SESSION['CORREO'] =  $datos[7]["CORREO"];
					$_SESSION['SEXO'] =  $datos[8]["SEXO"];
					$_SESSION['TEL'] =  $datos[9]["TEL"];

	    	    }
	    	    
	        }
	        else{
	            //NO encuentra al usuario
	    	    echo '<script language="javascript">alert("Acceso denegado, los datos son incorrectos");</script>';
            }
	    
    }
?>

   <div id="chefs" class="parallax pricing">
        <div class="container inner">
         <div class="container inner">
<div class="container inner">
            <h2 class="section-title text-center"></h2>            
            <div class="row text-center chefs">
        <div class="login-box">
      <img src="img/user.png" class="avatar">
      <h2>Iniciar Sesión</h2>
      <form action="" method="post">
        <!-- USERNAME INPUT -->
        <input name="user" type="text" placeholder="Usuario" required>
        <!-- PASSWORD INPUT -->
        <input name="pass" type="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar" name="login-submit" id="login-submit">
        
        <a href="#">¿Olvidaste tu contraseña?</a><br>
        <a href="?op=registrar">¿No tienes una cuenta?</a>

      </form>
    </div>
    </div>
            </div>
  </div>
        <!-- /.container -->
            </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->






