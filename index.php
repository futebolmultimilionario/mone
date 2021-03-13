	<?php
  $requisicao = $_POST;
  ob_start();
	var_dump($requisicao);
	$input = ob_get_contents();
	ob_end_clean();
	file_put_contents("input.log",$input.PHP_EOL,FILE_APPEND);
  ?>
