<?php
session_start();
include("connect.php");
ob_start();
/*ID DO USUARIO*/
$idUsuario = $_SESSION['idUsuario'];

/*TOTAL DA COMPRA*/
$totalFinal = $_POST['totalFinalH'];

/*ITENS DO PEDIDO*/
if (isset($_POST['itenCarne'])) {
	$carne = $_POST['itenCarne'];
}
if (isset($_POST['itenOvo'])) {
	$ovo = $_POST['itenOvo'];
}
if (isset($_POST['itenAlface'])) {
	$alface = $_POST['itenAlface'];
}
if (isset($_POST['itenBacon'])) {
	$bacon = $_POST['itenBacon'];
}
if (isset($_POST['itenPicles'])) {
	$picles = $_POST['itenPicles'];
}
if (isset($_POST['itenCheddar'])) {
	$cheddar = $_POST['itenCheddar'];
}
if (isset($_POST['itenPresunto'])) {
	$presunto = $_POST['itenPresunto'];
}
if (isset($_POST['itenTomate'])) {
	$tomate = $_POST['itenTomate'];
}

$allItens = $carne.",".$alface.",".$bacon.",".$picles.",".$cheddar.",".$ovo.",".$presunto.",".$tomate;
echo $allItens;

/*BATATAS*/
$batataP = $_POST['batataPequena'];
$batataM = $_POST['batataMedia'];
$batataG = $_POST['batataGrande'];

/*BEBIDAS*/
if (isset($_POST['refri'])) {
	$recipienteR = $_POST['refri'];
}
if (isset($_POST['quantidadeRefri'])) {
	$quantidadeR = $_POST['quantidadeRefri'];
}
if (isset($_POST['saborRefri'])) {
	$saborR = $_POST['saborRefri'];
}

if (isset($_POST['suco'])) {
	$recipienteS = $_POST['suco'];
}
if (isset($_POST['quantidadeSuco'])) {
	$quantidadeS = $_POST['quantidadeSuco'];
}
if (isset($_POST['saborSuco'])) {
	$saborS = $_POST['saborSuco'];
}

/*INSERE NO BANCO*/
if ($totalFinal > 0) {

	if (isset($_POST['dados'])) {
	$acrescimos = $_POST['dados'];
	$strigA = implode(",", $acrescimos);
	print $strigA;
	}else{
		$strigA = "Sem acrescimos";
	}

/*HAMBURGUER*/
  $result_pedido = "INSERT INTO item (id,acrescimos,itenshamburguer,total,usuario_id) VALUES (null,
  '$strigA',
  '$allItens',
  '$totalFinal','$idUsuario')";
  $resultado_pedido = mysqli_query($con,$result_pedido);

/*BATATA*/
  $result_batata = "INSERT INTO batatas (id,batataPequena,batataMedia,batataGrande,usuario_id) VALUES (null,'$batataP','$batataM','$batataG','$idUsuario')";
  $resultado_batata = mysqli_query($con,$result_batata);

/*REFRIGERANTE*/
	$result_refri = "INSERT INTO refrigerante (id,recipiente,quantidade,sabor,usuario_id) VALUES(null,'$recipienteR','$quantidadeR','$saborR','$idUsuario')";
	$resultado_refri = mysqli_query($con,$result_refri);

/*SUCO*/
	$result_suco = "INSERT INTO suco (id,recipiente,quantidade,sabor,usuario_id) VALUES(null,'$recipienteS','$quantidadeS','$saborS','$idUsuario')";
	$resultado_suco = mysqli_query($con,$result_suco);

/*COMPRA REALIZADA*/
  if (isset($resultado_pedido) && isset($result_batata)) {	
	$_SESSION['compraRealizada'] = "Sua compra foi realizada com sucesso! O seu pedido chegará em breve!";
	header("Location:oficina.php");
  }


}else{
	$_SESSION['compreAlgo'] = "Você não Escolheu nenhum item. Por favor monte o seu Hambúrguer";
	header("Location:oficina.php");
}


 ?>