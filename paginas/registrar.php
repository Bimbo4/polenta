  <?php
$datosG=array();
  $cliente = new SoapClient(null, array(
            'uri' => 'https://www.upmhworld.com',
            'location' => 'https://www.upmhworld.com/polenta/servicioweb/wspolenta.php'
        ));
        $nombre="";
        $ap="";
        $am="";
        $usuario="";
        $correo="";
		$contra="";
		if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['lastname2']) && !empty($_POST['username']) &&!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])){
			if($_POST['password'] == $_POST['confirm-password']){
				$nombre=$_POST['name'];
				$ap=$_POST['lastname'];
				$am=$_POST['lastname2'];
				$usuario=$_POST['username'];
				$correo=$_POST['email'];
				$contra=$_POST['password'];
				$datosG = $cliente->registrarUsuario($nombre,$ap,$am,$usuario,$contra,$correo);
				if($datosG[0]['CLAVE'] == '1'){
                    echo '<script language="javascript">alert("Registro existoso");</script>';
	            }
	            else{
	    	        echo '<script language="javascript">alert("No se pudo registrar");</script>';
	            
	            }

			}
			else{
				echo '<script language="javascript">alert("Su contrase«Ða no coincide, por favor vuelve a ingresarla");</script>';
			}
		}else{
			echo '<script language="javascript">alert("Debe de llenar todos los campos");</script>';
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
      <h2>Registro</h2>
      <form action="" method="post">
        <!-- USER INPUT -->
        <input name="name" type="text" placeholder="Nombre">
        <input name="lastname" type="text" placeholder="Apellido Paterno">
        <input name="lastname2" type="text" placeholder="Apellido Paterno">
        <input name="username" type="text" placeholder="Nombre de Usuario">
        <input name="password" type="password" placeholder="ContraseÃ±a">
        <input name="confirm-password" type="password" placeholder="Confirmar contraseÃ±a">
        <input name="email" type="text" placeholder="Email">
        <input type="submit" value="Registrar">

      </form>
    </div>
    </div>
            </div>
  </div>
        <!-- /.container -->
            </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->


  




