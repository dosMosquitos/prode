<?php
include_once('./php/includes.php');
$u = new url('/','/');
include_once('./header.php');
?>
		<pre>
			<?php print_r($u); ?>
		</pre>
<?php
echo count($u->getParams());
include_once('./footer.php');
?>