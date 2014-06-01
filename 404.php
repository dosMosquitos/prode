<h1>404</h1>
<?php 
	$db = new DB();
	$paises = $db->getData('SELECT iso FROM paises ORDER BY id;');
	while($pais = $db->getObject()){
		?>
		<div class="bandera">
			<div class="<?php echo $pais->iso;?>"></div>
		</div>
		<?php
	}
?>