<?php
session_start();
if(!isset($_SESSION['usuario'])) {
  header('Location: index.php'); 
  exit();
}
if ($_SESSION['rol'] != 'Docente')
{
  echo'<script type="text/javascript">
        alert("No eres docente, lo siento");
        </script>';
          exit();
}
require 'conecto.php';
global $connect;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title></title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/js/bootstrap.min.js">
    <link rel="stylesheet" href="public/css/estilos.css">
      <li><a href="Docente.php?logout=true">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
            <li><a href=""> </a>


</head>
<body>
		
<header>
    <img src="images/cabecera2.png" id="cabecera">
    <nav>
        
             <ul>
           <li><a href="Docente.php" >Inicio</a></li>
            <li><a href="horariosDoc.php" >Modificar Horarios</a></li>
              <li><a href="accesosDoc.php" >Accesos</a></li>
               <li><a href="graficoUsuariosDoc.php" >Estadisticas de Accesos</a></li>
                <li><a href="reservacionesDoc.php" >Reservaciones</a></li>
  <li><a href="Docente.php?logout=true">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>


                  </ul>
    </nav>
</header>



 
 <video id="miVideo" src="" muted autoplay loop poster="videos/backgroundDocente.jpg"></video>
 

	<div class="row" align="center">
			<div class="col-md-12">
				   <form method="post" enctype="multipart/form-data">
                    <h1>Accesos al laboratorio</h1></br></br>
				   		<label>Filtrar</label>
				   		
				   		 &nbsp; &nbsp;<select name="modo" onchange="elegirO.call(this, event)">
				   		            <option value=0>Eliga una opcion</option>
                                    <option value="matricula">Por matricula</option>
                                    <option value="mes">Por mes</option>
                                    <option value="fechas">Entre fechas</option>
                                </select>
                               &nbsp;<input type="number" id="byId" name="byId" placeholder="Matricula" disabled>

                                    &nbsp;<select id="mes" name="mes" disabled>
                                    <option value="january">Enero</option>
                                    <option value="february">Febrero</option>
                                    <option value="march">Marzo</option>
                                    <option value="april">Abril</option>
                                    <option value="may">Mayo</option>
                                    <option value="june">Junio</option>
                                    <option value="july">Julio</option>
                                    <option value="august">Agosto</option>
                                    <option value="september">Septiembre</option>
                                    <option value="october">Octubre</option>
                                    <option value="november">Noviembre</option>
                                    <option value="december">Diciembre</option>
                                </select>
                            &nbsp;
                                <input type="date" id="fec1" name="fec1" step="1" disabled/>
                                <input type="date" id="fec2" name="fec2" step="1" disabled/>  
                
                                
                                
                            <script>
                           function elegirO(event) {
                               byId.removeAttribute('disabled')
                               mes.removeAttribute('disabled')
                               fec1.removeAttribute('disabled')
                               fec2.removeAttribute('disabled')
                            if(this.options[this.selectedIndex].value == 'matricula') {
                                             document.getElementById("mes").disabled = "false"
                                             document.getElementById("fec1").disabled = "false"
                                             document.getElementById("fec2").disabled = "false"
                                             
                                            
                           }else if(this.options[this.selectedIndex].value == 'mes'){
                                             document.getElementById("byId").disabled = "false"
                                             document.getElementById("fec1").disabled = "false"
                                             document.getElementById("fec2").disabled = "false"
                           
                           
                           }else if(this.options[this.selectedIndex].value == 'fechas'){
                                document.getElementById("mes").disabled = "false"
                                document.getElementById("byId").disabled = "false"
                               
                           }
                           }
                           </script> 
                             &nbsp; &nbsp;<input type="submit" value="Buscar" name="buscar"><br></br></br>
                                 
                            <script>
                           var select = document.querySelector('mes');
                           select.selectedIndex = -1;
                           </script> 
                                 				</form>
			</div>
			
			
		</div>
       <?php
	$matricula = "";
	$mes = "";
	$fecha1 ="";
	$fecha2 ="";
	
	if (isset($_POST['buscar'])) {

    	global $connect;
    	
    	if (empty($_POST['fec1']) && empty($_POST['fec2'])&& empty($_POST['byId'])) {
    	   $mes = $_POST['mes'];
		
			$query = "SELECT a.nombreCompleto NOMBRE, b.fechaAcceso INGRESO, b.fechaSalida SALIDA ,
TIMEDIFF(b.fechaAcceso, b.fechaSalida) DURACION From usuario as a , accesoLab as b
where a.usuario=b.usuarioAcc 
AND ('$mes'=MONTHNAME(b.fechaAcceso) or '$mes'=MONTHNAME(b.fechaSalida) );";
	
	$result = mysqli_query($connect, $query);
    if ($ro = mysqli_fetch_array($result)) {
        echo "<div class='row'>";
		echo "<div class='col-md-12'>";
		echo "<table class='table table-hover'>";
		echo "<thead>";
        echo "<th>NOMBRE</th>";
        echo "<th>HORA DE LLEGADA</th>";
        echo "<th>HORA DE SALIDA</th>";
        echo "<th>DURACION</th>";
        	echo "</thead>";
						echo "<tbody>";
        do {

            echo "<tr>";
            echo "<td>$ro[0]</td>";
            echo "<td>$ro[1]</td>";
            echo "<td>$ro[2]</td>";
            echo "<td>$ro[3]</td>";
            echo "</tr>";
        } while ($ro = mysqli_fetch_array($result));
        echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
    } else {
        echo "No hay registros";
    }
	}else if(empty($_POST['byId'])&& empty($_POST['mes'])) {
	    $fecha1 = $_POST['fec1'];
        $fecha2 = $_POST['fec2'];
        
	    $query2 = "SELECT a.nombreCompleto NOMBRE, b.fechaAcceso INGRESO, b.fechaSalida SALIDA ,
TIMEDIFF(b.fechaAcceso, b.fechaSalida) DURACION From usuario as a , accesoLab as b
where a.usuario=b.usuarioAcc AND (
(b.fechaAcceso between '$fecha1' and DATE_ADD('$fecha2', INTERVAL 1 DAY))
OR (b.fechaSalida between '$fecha1' and DATE_ADD('$fecha2', INTERVAL 1 DAY)));";
	
	$result2 = mysqli_query($connect, $query2);
    if ($row = mysqli_fetch_array($result2)) {
       echo "<div class='row'>";
		echo "<div class='col-md-12'>";
		echo "<table class='table table-hover'>";
		echo "<thead>";
        echo "<th>NOMBRE</th>";
        echo "<th>HORA DE LLEGADA</th>";
        echo "<th>HORA DE SALIDA</th>";
        echo "<th>DURACION</th>";
        	echo "</thead>";
						echo "<tbody>";
        do {

            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "</tr>";
        } while ($row = mysqli_fetch_array($result2));
   echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
    } else {
        echo "No hay registros";
    }
	}else if(empty($_POST['fec1']) && empty($_POST['fec2'])&& empty($_POST['mes'])){
	   $matricula = $_POST['byId'];
	    	    
	   $query3 = "SELECT a.nombreCompleto NOMBRE, b.fechaAcceso INGRESO, b.fechaSalida SALIDA ,
TIMEDIFF(b.fechaAcceso, b.fechaSalida) DURACION From usuario as a , accesoLab as b
where a.usuario=b.usuarioAcc AND b.usuarioAcc= '$matricula';";
	
	$result3 = mysqli_query($connect, $query3);
    if ($roww = mysqli_fetch_array($result3)) {
       echo "<div class='row'>";
		echo "<div class='col-md-12'>";
		echo "<table class='table table-hover'>";
		echo "<thead>";
        echo "<th>NOMBRE</th>";
        echo "<th>HORA DE LLEGADA</th>";
        echo "<th>HORA DE SALIDA</th>";
        echo "<th>DURACION</th>";
        	echo "</thead>";
						echo "<tbody>";
        do {

            echo "<tr>";
            echo "<td>$roww[0]</td>";
            echo "<td>$roww[1]</td>";
            echo "<td>$roww[2]</td>";
            echo "<td>$roww[3]</td>";
            echo "</tr>";
        } while ($roww = mysqli_fetch_array($result3));
   echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
    } else {
        echo "No hay registros";
    }  
	}else{
	    echo "Ingrese una opcion";
	}
	}else if (!isset($_POST['buscar'])){
$query0 = "SELECT a.usuario MATRICULA,a.nombreCompleto NOMBRE, b.fechaAcceso INGRESO, b.fechaSalida SALIDA ,
TIMEDIFF(b.fechaAcceso, b.fechaSalida) DURACION From usuario as a , accesoLab as b
where a.usuario=b.usuarioAcc;";
    
    $result0 = mysqli_query($connect, $query0);
    if ($row0 = mysqli_fetch_array($result0)) {
       echo "<div class='row'>";
        echo "<div class='col-md-12'>";
        echo "<table class='table table-hover'>";
        echo "<thead>";
        echo "<th>ID</th>";
        echo "<th>NOMBRE</th>";
        echo "<th>HORA DE LLEGADA</th>";
        echo "<th>HORA DE SALIDA</th>";
        echo "<th>DURACION</th>";
            echo "</thead>";
                        echo "<tbody>";
        do {

            echo "<tr>";
            echo "<td>$row0[0]</td>";
            echo "<td>$row0[1]</td>";
            echo "<td>$row0[2]</td>";
            echo "<td>$row0[3]</td>";
             echo "<td>$row0[4]</td>";
            echo "</tr>";
        } while ($row0 = mysqli_fetch_array($result0));
   echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "No hay registros";
    }  

    }
	
?>
					
					
			<?php
if(isset($_GET['logout']) && $_GET['logout'] == true)
{
require 'conecto.php';
global $connect;

$query4 = "Update AccesoLab SET fechaSalida = now() WHERE idAcc = '".$_SESSION['last']."'";
mysqli_query($connect, $query4) or die (mysqli_error($connect));
session_destroy();
 header('Location: index.php'); 
}
    

?>		

	
	
</body>
</html>