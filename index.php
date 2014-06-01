<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR" lang="es-AR">
<head>
	<title>PRODE MUNDIAL FIFA 2014</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href="./css/style.css" type="text/css" rel="stylesheet" />
	<link href="./css/phoca-flags.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="./css/ionicons.css" rel="stylesheet" type="text/css" media="screen" />
	<meta name="Mundial" content="Prode online brasil 2014 mundial">    
	
	<script type="text/javascript" src="./js/mootools.js"></script>
	<script type="text/javascript" src="./js/mootools-more.js"></script>
	<script type="text/javascript" src="./js/funciones.js"></script>
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
<body>
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
	<div id="main-content" class="main">
		<div class="contenido">
			<h1 class="title">Prode Mundial Brasil 2014</h1>
			<h2>Ingresá tus pronosticos</h2>
			<div class="controles absolute right">
				<h3>Controles</h3>
				<div class="fila">
					<span>Fecha límite</span>
					<input type="checkbox"/>
				</div>
			</div>
			<div class="wide">
				<div class="friends">
					<div class="head">
						<div class="pais">Usuario</div>
						<div class="resultado">Gan</div>
						<div class="resultado">per</div>
						<div class="resultado">Ac</div>
						<div class="resultado">Des</div>
						<div class="resultado">Pts</div>
					</div>
					<div class="body">
						<div class="row">
							<div class="pais">Mdiazvillodas</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
						<div class="row">
							<div class="pais">Morigoni</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
						<div class="row">
							<div class="pais">Mdiazvillodas</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
						<div class="row">
							<div class="pais">Mdiazvillodas</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
						<div class="row">
							<div class="pais">Mdiazvillodas</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
						<div class="row">
							<div class="pais">Mdiazvillodas</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">5</div>
							<div class="resultado">100</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="fixture">
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado"></div>
						<div class="resultado">VS</div>
						<div class="resultado"></div>
						<div class="pais">País</div>
						<div class="bandera"></div>
						<div class="fecha">Día</div>
					</div>
					<div class="body">
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row itm">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" value="2" class="res"/>
							</div>
							<div class="pais">Argentina</div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="resultado">VS</div>
							<div class="resultado">
								<input type="text" class="res"/>
							</div>
							<div class="pais"></div>
							<div class="bandera"></div>
							<div class="fecha">12/06</div>
						</div>
					</div>
				</div>
				<input type="submit" class="send" value="Guardar Cambios"/>
			</div>
			<div class="col">
				<div class="tablas">
					<div class="inf">
						<span>Grupo A</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo B</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo C</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo D</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo E</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo F</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo G</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
				<div class="tablas">
					<div class="inf">
						<span>Grupo H</span>
					</div>
					<div class="head">
						<div class="bandera"></div>
						<div class="pais">País</div>
						<div class="resultado">Pts</div>
						<div class="resultado">PG</div>
						<div class="resultado">PE</div>
						<div class="resultado">PP</div>
						<div class="resultado">GF</div>
						<div class="resultado">GC</div>
						<div class="resultado">DIf</div>					
					</div>
					<div class="body">
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
						<div class="row alt">
							<div class="bandera"></div>
							<div class="pais">Argentina</div>
							<div class="resultado">3</div>
							<div class="resultado">4</div>
							<div class="resultado">5</div>
							<div class="resultado">6</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
							<div class="resultado">12</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>