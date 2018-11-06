<?php
	
	session_start();
	session_destroy();
	header("Location: ../../Usuario/telas_usuario/tela_login.php?");
?>

