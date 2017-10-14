<?php
	session_start();
	if($_SESSION['usuarioNiveisAcessoId'] == "1"){
		header("Location: administrativo.php");
	}
	elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
		header("Location: colaborador.php");
	}
	elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
		header("Location: cliente.php");
	}
	else{
		header("Location: index.php");
	}
?>