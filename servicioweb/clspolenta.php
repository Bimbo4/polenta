<?php

	class clspolenta{
		
		public function nombre($nom){
				return "Bienvenido" .$nom .", estas usando el servicio web";
		}

		public function acceso($Usuario, $Contrasena){
			$datos = array();
				
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'SNSD2018.', 'upmhworl_polenta')){
				$renglon = mysqli_query($conn, "CALL spValidarAcceso('$Usuario', '$Contrasena');");
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datos[0]["CLAVE"] = $resultado["CLAVE"];
					if((int)$datos[0]["CLAVE"]!=0){
						$datos[1]["NOMBRE"] = $resultado["NOMBRE"];
						$datos[2]["AP"] = $resultado["AP"];
						$datos[3]["AM"] = $resultado["AM"];
						$datos[4]["ROL"] = $resultado["ROL"];
						$datos[5]["FOTO"] = $resultado["FOTO"];
						$datos[6]["USUARIO"] = $resultado["USUARIO"];
						$datos[7]["CORREO"] = $resultado["CORREO"];
						$datos[8]["SEXO"] = $resultado["SEXO"];
						$datos[9]["TEL"] = $resultado["TEL"];
					}
				}
				mysqli_close($conn);
			}
			return $datos;
		}

		// ## Registro de Usuario
		public function registrarUsuario($NOMBRE,$APELLIDOPAT,$APELLIDOMAT,$USUARIO,$CONTRASENA,$CORREO)
		{	 
			$datosG=array();   
		
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'SNSD2018.', 'upmhworl_polenta')){
				$renglon = mysqli_query($conn,"CALL spRegistrarUsuario('$NOMBRE','$APELLIDOPAT','$APELLIDOMAT','$USUARIO','$CONTRASENA','$CORREO')");	  			
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datosG[0]["CLAVE"] =$resultado["CLAVE"];				
					if((int)$datosG[0]!=0){				
						$datosG[0]["CLAVE"] =$resultado["CLAVE"];
					}
				}							
				mysqli_close($conn); 		
			}    
			return $datosG;
		} 	
		
		public function modificarUsuario($Clave,$Nombre,$AP,$AM,$Usuario,$Correo, $Sexo, $Telefono, $Foto)
		{	 
			$datosG=array();   
		
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
				$renglon = mysqli_query($conn,"CALL spModificarUsuario('$Clave','$Nombre','$AP','$AM','$Usuario','$Correo','$Sexo','$Telefono','$Foto')");	  			
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datosG[0]["CLAVE"] =$resultado["CLAVE"];				
					if((int)$datosG[0]!=0){				
						$datosG[0]["CLAVE"] =$resultado["CLAVE"];
					}
				}							
				mysqli_close($conn); 		
			}    
			return $datosG;
		} 	

	

		
		public function mostrarRHabitaciones($id){

			$reg=0;
            $datos=array();
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
                $recordset=mysqli_query($conn,"CALL spConsultarHabitacion('$id')");
                while($resultado = mysqli_fetch_assoc($recordset)){
                    $datos[$reg]["CLAVE"]=$resultado["hab_cve_habitacion"];
					$datos[$reg]["CLAVEHA"]=$resultado["hab_cve_tipo"];
					$datos[$reg]["NOMBRE"]=$resultado["hab_nombre"];
					$datos[$reg]["CAPACIDAD"]=$resultado["hab_capacidad"];
					$datos[$reg]["CAMAS"]=$resultado["hab_nocamas"];
					$datos[$reg]["IMAGEN"]=$resultado["hab_imagen_principal"];
					$datos[$reg]["DESCRIPCION"]=$resultado["hab_descripcion"];
					$datos[$reg]["ESTADO"]=$resultado["hab_estatus"];
					$datos[$reg]["HABITACION"]=$resultado["tip_nombre_habitacion"];
					$datos[$reg]["HOTEL"]=$resultado["hot_nombre"];
					$datos[$reg]["TARIFA"]=$resultado["hab_tarifa"];
                    $reg++;
                }
                mysqli_free_result($recordset);
                mysqli_close($conn);
            }
            return $datos;
		}
    	
        	
    		
    		public function listarHabitacionesCliente(){
    			$reg=0;
                $datos=array();
    			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
                    $recordset=mysqli_query($conn,"call spListarHabitacionesCliente()");
                    while($resultado = mysqli_fetch_assoc($recordset)){
                        $datos[$reg]["CLAVE"]=$resultado["CLAVE"];
                        $datos[$reg]["NOMBRE"]=$resultado["NOMBRE"];
                        $datos[$reg]["DESCRIPCION"]=$resultado["DESCRIPCION"];
    					$datos[$reg]["TARIFA"]=$resultado["TARIFA"];
    					$datos[$reg]["PRINCIPAL"]=$resultado["PRINCIPAL"];
                        $reg++;
                    }
                    mysqli_free_result($recordset);
                    mysqli_close($conn);
                }
                return $datos;
    		}
    		
    		public function eliminarHabitacion($id){
    			$datosG=array();   
    		
    			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
    				$renglon = mysqli_query($conn,"CALL spEliminarHabitacion('$id')");	  			
    				while($resultado = mysqli_fetch_assoc($renglon)){
    					$datosG[0]["CLAVE"] =$resultado["CLAVE"];				
    					
    				}							
    				mysqli_close($conn); 		
    			}    
    			return $datosG;
    		}
    		
    		
		public function registrarReservacionHab($HABITACION,$USUARIO,$NOMBRE,$AP,$AM,$INICIO, $FINAL, $PERSONAS)
		{	 
			$datosG=array();   
		
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
				$renglon = mysqli_query($conn,"CALL spRegistrarReservacionHab('$HABITACION','$USUARIO','$NOMBRE','$AP','$AM','$INICIO', '$FINAL', '$PERSONAS')");	  			
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datosG[0]["CLAVE"] =$resultado["CLAVE"];				
					if((int)$datosG[0]!=0){				
						$datosG[0]["CLAVE"] =$resultado["CLAVE"];
					}
				}							
				mysqli_close($conn); 		
			}    
			return $datosG;
		} 	
		
		
		public function listarResHabCliente($Clave){
			$reg=0;
			$datos=array();
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
				$recordset=mysqli_query($conn,"call spListarResHabCliente($Clave)");
				while($resultado = mysqli_fetch_assoc($recordset)){
					$datos[$reg]["HABITACION"]=$resultado["HABITACION"];
					$datos[$reg]["INICIO"]=$resultado["INICIO"];
					$datos[$reg]["FIN"]=$resultado["FIN"];
					$reg++;
				}
				mysqli_free_result($recordset);
				mysqli_close($conn);
			}
			return $datos;
		}

		

		public function mostrarInforme(){
			$reg=0;
            $datos=array();
			if($conn = mysqli_connect('localhost', 'upmhworl_ama', 'mArmor574.', 'upmhworl_polenta')){
                $recordset=mysqli_query($conn,"call spMostrarInformes(0)");
                while($resultado = mysqli_fetch_assoc($recordset)){
                    $datos[$reg]["CLAVE"]=$resultado["inf_cve_informes"];
                    $datos[$reg]["HOTEL"]=$resultado["inf_cve_hotel"];
                    $datos[$reg]["NOMBRE"]=$resultado["inf_nombre"];
					$datos[$reg]["CORREO"]=$resultado["inf_correo"];
					$datos[$reg]["MENSAJE"]=$resultado["inf_mensaje"];
                    $reg++;
                }
                mysqli_free_result($recordset);
                mysqli_close($conn);
            }
            return $datos;
		}
    		
		
	}


?>
