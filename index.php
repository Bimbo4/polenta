
<?php

$pagina=isset($_GET['op'])? strtolower($_GET['op']): 'inicio';
require_once'paginas/menu.php';
require_once'paginas/'.$pagina.'.php';
require_once'paginas/piePag.php';

?>
