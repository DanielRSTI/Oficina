<?php 
session_start();
include ("connect.php");

	if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
		$usuario = mysqli_real_escape_string($con,$_POST['email']);

		$senha = mysqli_real_escape_string($con,$_POST['senha']);
		

		$sql = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";

		$result = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if (empty($resultado) ) {
			$_SESSION['loginErro'] = "Usuário ou Senha inválido";
			header("Location:login.php");

			}else if(isset($resultado)){
				$_SESSION['usuarioNome'] = $resultado['nome'];
				header("Location:oficina.php");
		}
		
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location:login.php");
	}

 ?>