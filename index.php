<?php
include(dirname(__FILE__).'/php/includes.php');
$u = new url($baseUri,'/','/');
include(dirname(__FILE__).'/header.php');

if(file_exists(dirname(__FILE__).'/'.$u->modulo.'.php')){
	include((dirname(__FILE__).'/'.$u->modulo.'.php'));
	}else{
	$u->modulo = 'e404';
	include((dirname(__FILE__).'/404.php'));
	}
include(dirname(__FILE__).'/footer.php');
?>