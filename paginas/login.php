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
        
        <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Bienvenido!  Obteniendo informacion.... ');
    FB.api('/me', function(response) {
      console.log('Logeo exitoso: ' + response.name);
      document.getElementById('status').innerHTML =
        'Gracias por iniciar sesión, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

</br><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
Iniciar sesion con facebook</fb:login-button>

<div id="status">
</div>
        
        
        
      </form>
    </div>
    </div>
            </div>
  </div>
        <!-- /.container -->
            </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '225819824976241',
      xfbml      : true,
      version    : 'v3.2'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  





