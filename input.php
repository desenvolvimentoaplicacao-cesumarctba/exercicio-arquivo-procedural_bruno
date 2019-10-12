<?php
	$i = $_POST['data'] ?? false;
	$i .= PHP_EOL;
	file_put_contents("data.txt", $i, FILE_APPEND);
	//redireciona para arquivo que le os dados
	header('Location: output.php');
