<?php
    session_start();
    unset($_SESSION['activo']);
    unset($_SESSION['CLAVE']);
    unset($_SESSION['NOMBRE']);
    unset($_SESSION['AP']);
    unset($_SESSION['AM']);
    unset($_SESSION['ROL']);
    unset($_SESSION['FOTO']);
    unset($_SESSION['USUARIO']);
    unset($_SESSION['CORREO']);
    session_destroy();
    	echo "<script> document.location.href = '?op=login';</script>";
    
?>