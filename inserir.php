<?php 
session_start();
include("connect.php");
ob_start();

$cadUsuario = filter_input(INPUT_POST, 'cadUsuario' , FILTER_SANITIZE_STRING);

if (isset($cadUsuario)) {
	$dados = filter_input_array(INPUT_POST , FILTER_DEFAULT);
	$verificaEmail = $dados['email'];

	$sqli = mysqli_query($con , "SELECT * FROM usuario where email ='{$verificaEmail}'") or print mysqli_error();

	if (mysqli_num_rows($sqli)>0) {
		$_SESSION['cadastroErro'] = "Esse Email já foi cadastrado";
		header("Location:cadastro.php");
	}else{
		$result_usuario = "INSERT INTO usuario (nome, email, senha, telefone, bairro, rua, numero_casa, complemento) VALUES (
			'".$dados['nome']."',
			'".$dados['email']."',
			'".$dados['password']."',
			'".$dados['telefone']."',
			'".$dados['bairro']."',
			'".$dados['rua']."',
			'".$dados['numeroresidencia']."',
			'".$dados['complemento']."'
		)";
		
		$resultado_usuario = mysqli_query($con, $result_usuario);
		$_SESSION['sucessoCadastro'] = "Usuário cadastrado com sucesso!";
		header("Location:login.php");
	}


}


 ?>