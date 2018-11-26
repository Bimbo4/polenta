<?php

class clsarticulo{

	public function nombre($nom){

		return "Bienvenido" .$nom.", estas usando el servicio web";

	}


	public function acceso($usuario,$contra){

		$datos=array();

		if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos")){

			$renglon = mysqli_query($conn,"CALL spValidarAccesoAdm('$usuario','$contra')");

			while($resultado = mysqli_fetch_assoc($renglon)){

				$datos[0]["CLAVE"] = $resultado["CLAVE"];

				if((int)$datos[0]["CLAVE"]!=0){

					$datos[1]["NOMBRE"]=$resultado["NOMBRE"];

					$datos[2]["ROL"]=$resultado["ROL"];

				}
			}
			mysqli_close($conn);
		}
		//devuelve el arreglo de datos
    	return $datos;
	}
	public function contarArticulos(){
       $res=array();

		if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos")){

			$consulta = mysqli_query($conn,"CALL spConsultarAllArt(0,0,0);");
			$res[0] = mysqli_num_rows($consulta);
			}
		//devuelve el arreglo de datos
		mysqli_free_result($consulta);
	    mysqli_close($conn);
    	return $res;

}
public function mostrarArticulos($iniPag,$numReg){
       $res=array();
       $reg=0;
       $conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos");
       $recordSet = mysqli_query($conn,"CALL spConsultarAllArt($iniPag,$numReg,1);");

			while($resultado = mysqli_fetch_assoc($recordSet)){

				$res[$reg]["ID"] = $resultado["ID"];
				$res[$reg]["TEMA"] = $resultado["TEMA"];
				$res[$reg]["TITULO"] = $resultado["TITULO"];	
				$res[$reg]["CORREO"] = $resultado["CORREO"];
				$res[$reg]["ISBN"] = $resultado["ISBN"];
				$res[$reg]["RESUMEN"] = $resultado["RESUMEN"];	
				$res[$reg]["VOLUMEN"] = $resultado["VOLUMEN"];
				$res[$reg]["FECHA_PUBLICACION"] = $resultado["FECHA_PUBLICACION"];
				$res[$reg]["REVISTA"] = $resultado["REVISTA"];	
				$reg++;			
			}
			mysqli_free_result($recordSet);
			mysqli_close($conn);
			return $res;
		}
		//devuelve el arreglo de datos
    	


public function buscarUsuarios($clave){
       $res=array();
       $conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos");
       $records = mysqli_query($conn,"CALL spBuscarUsuarios($clave);");

			while($resultado = mysqli_fetch_assoc($records)){
				$res["ID"] = $resultado["ID"];
				$res["NOMBRE"] = $resultado["NOMBRE"];
				$res["AP"] = $resultado["AP"];
				$res["AM"] = $resultado["AM"];
				$res["USUARIO"] = $resultado["USUARIO"];
				$res["CLAVE"] = $resultado["CLAVE"];	
				$res["ESTATUS"] = $resultado["ESTATUS"];
				$res["FECHA_REGISTRO"] = $resultado["FECHA_REGISTRO"];
				$res["ROL"] = $resultado["ROL"];							
			}
			mysqli_free_result($records);
			mysqli_close($conn);
			return $res;
		}

  // ## Registro de Articulo
	public function regisArticulo($TEMA,$TITULO,$CORREO,$ISBN,$RESUMEN,$VOLUMEN,$FECHA,$REVISTA)
	{	 
         $datos=array();   
      
      if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos") ){
		$renglon = mysqli_query($conn,"CALL spRegistrarArticulos('$TEMA','$TITULO','$CORREO','$ISBN','$RESUMEN',$VOLUMEN,'$FECHA','$REVISTA')");	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["CLAVE"] =$resultado["CLAVE"];				
				if((int)$datos[0]!=0)
				{				
					$datos[0]["CLAVE"] =$resultado["CLAVE"];

				
				
										
				}
			}							
            mysqli_close($conn); 		
      }    
                 
	   return $datos;
	}
  // ## Registro de AUTOR
	public function regisAutor($ARTICULO,$NOMBRE,$APELLIDOPAT,$APELLIDOMAT)
	{	 
         $datos=array();   
      
      if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos") ){
		$renglon = mysqli_query($conn,"CALL spRegistrarAutores('$ARTICULO','$NOMBRE','$APELLIDOPAT','$APELLIDOMAT')");	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["CLAVE"] =$resultado["CLAVE"];				
				if((int)$datos[0]!=0)
				{				
					$datos[0]["CLAVE"] =$resultado["CLAVE"];

				
				
										
				}
			}							
            mysqli_close($conn); 		
      }    
                 
	   return $datos;
	}
	  // ## Registro de COAUTOR
	public function regisCoautor($ARTICULO,$NOMBRE,$APELLIDOPAT,$APELLIDOMAT)
	{	 
         $datos=array();   
      
      if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos") ){
		$renglon = mysqli_query($conn,"CALL spRegistrarCoautores('$ARTICULO','$NOMBRE','$APELLIDOPAT','$APELLIDOMAT')");	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["CLAVE"] =$resultado["CLAVE"];				
				if((int)$datos[0]!=0)
				{				
					$datos[0]["CLAVE"] =$resultado["CLAVE"];

				
				
										
				}
			}							
            mysqli_close($conn); 		
      }    
                 
	   return $datos;
	}
		  // ## Registro de REVISTA
	public function regisRevista($NOMBRE,$EDITORIAL)
	{	 
         $datos=array();   
      
      if($conn = mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos") ){
		$renglon = mysqli_query($conn,"CALL spRegistrarRevistas('$NOMBRE','$EDITORIAL')");	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["CLAVE"] =$resultado["CLAVE"];				
				if((int)$datos[0]!=0)
				{				
					$datos[0]["CLAVE"] =$resultado["CLAVE"];

				
				
										
				}
			}							
            mysqli_close($conn); 		
      }    
                 
	   return $datos;
	}
	// ## Editar Articulo
	public function ediArticulo(){
	    $res= array();
	    $conn=mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos");
	  $recordSet=mysqli_query($conn,"CALL spModificarArticulos('$CLAVE','$TEMA','$TITULO','$CORREO','$ISBN','$RESUMEN','$VOLUMEN','$FECHA','$REVISTA')");
	     while($resultado = mysqli_fetch_array($recordSet)){
	         $res["CLAVE"]=$resultado["CLAVE"];
	     }
	    mysqli_free_result($recordSet);
    	mysqli_close($conn);
    	return $res;
	}


	// ## Eliminar Articulo
	public function eliArticulo(){
	    $res;
	    $conn=mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos");
	    $res=mysqli_query($conn,"CALL spBorrarArticulos('$CLAVE')");
	    mysqli_free_result($res);
    	mysqli_close($conn);
    	return $res;
	}

	// ## Consultar Articulo
	public function conArticulo()
   {
       $datos=array(); 
       $conn=mysqli_connect("localhost","id7078023_alizalm","011018","id7078023_bdarticulos");	    
       $recordSet=mysqli_query($conn,"CALL ($)");
       	while($resultado = mysqli_fetch_assoc($recordSet)){
                $datos[0]["ID"] =$resultado["ID"];				
				if((int)$datos[0]["ID"]!=0)
				{	
			$res[""]=$resultado[""];
			$res[""]=$resultado[""];
			$res[""]=$resultado[""];
			$res[""]=$resultado[""];
			$res[""]=$resultado[""];
			$res[""]=$resultado[""];	
					
				}
			}							
            mysqli_close($conn); 		
         
                 
	   return $datos;
   }	

    	

}


?>
