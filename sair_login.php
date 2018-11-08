<?php 
session_start();
include ("connect.php");

	if (!$_SESSION["usuarioNome"]) {

	  header("Location:login.php");
	}

	else if (isset($_SESSION["usuarioNome"])) {
		unset ($_SESSION["usuarioNome"]);
		$_SESSION['logOff'] = "Você foi deslogado com sucesso";
	  	header("Location:login.php");
	}

 ?>