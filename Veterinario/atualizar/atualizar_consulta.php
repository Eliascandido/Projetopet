<?php
session_start();
include("../funcao/Funcao_atualizar.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$requerimento = filter_input(INPUT_POST, 'requerimento', FILTER_SANITIZE_STRING);
$relatorio = filter_input(INPUT_POST, 'relatorio', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);


atualizar(array("requerimento","relatorio","data"), array($requerimento,$relatorio,$data), "consulta", "WHERE id_consulta = '$id'");
echo "<script> alert('Editado com sucesso'); location.href='../alterar_excluir/alterar_excluir_consulta.php'</script>";
?>

