<?php
	include 'clsarticulo.php';
	$soap= new SoapServer(null, array('uri' => 'http://localhost/'));
	$soap->setClass('clsarticulo');
	$soap-> handle();

?>