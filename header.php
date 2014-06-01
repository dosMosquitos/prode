<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR" lang="es-AR">
<head>
	<title>PRODE MUNDIAL FIFA 2014</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo $baseUri;?>/css/style.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo $baseUri;?>/css/phoca-flags.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo $baseUri;?>/css/ionicons.css" rel="stylesheet" type="text/css" media="screen" />
	<meta name="Mundial" content="Prode online brasil 2014 mundial">    
	
	<script type="text/javascript" src="<?php echo $baseUri;?>/js/mootools.js"></script>
	<script type="text/javascript" src="<?php echo $baseUri;?>/js/mootools-more.js"></script>
	<script type="text/javascript" src="<?php echo $baseUri;?>/js/funciones.js"></script>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript">
		function openLinkSimple(href, div){
			var request = new Request.HTML({
                        url: href,
                        method: 'get',
                        update: $(div),
                        onFailure: function(xhr){
                                $(div).setProperty('html', xhr.responseText);
                                }
                        });
			request.send();
			}
	</script>
</head>
<body id="<?php echo $u->modulo; ?>">
	<div class="top">
		<ul class="menu">
			<li class="item">Tus Reglas</li>
			<li class="item">Tu pronostico</li>			
		</ul>
		<div class="fila">
			<span>Agregar amigo al torneo</span>
			<input type="text"/>
		</div>
		<ul class="info">
			<li class="box azul">
				<i class="ion-clock"></i>
				<span class="text">Fecha Limite</span>
				<span class="fecha">12/06/2014</span>
			</li>
			<li class="box amarillo">
				<i class="ion-person-stalker"></i>
				<span class="text">Amigos</span>
				<span class="text">"Los pibes"</span>
			</li>
			<li class="box verde">
				<i class="ion-person"></i>
				<span class="text">Usuario</span>
				<span class="text">Mdiazvillodas</span>
			</li>
		</ul>
	</div>