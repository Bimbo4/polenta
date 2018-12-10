<?php
	include 'clspolenta.php';
	$soap= new SoapServer(null, array('uri' => 'http://localhost/'));
	$soap->setClass('clspolenta');
	$soap-> handle();

?>