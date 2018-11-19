<?php

include("../funcao/Funcao_atualizar.php");

$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
$crmv = filter_input(INPUT_POST, 'crmv', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$num_casa = filter_input(INPUT_POST, 'num_casa', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$especializacao = filter_input(INPUT_POST, 'especializacao', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


atualizar(array("crmv", "nome", "bairro", "rua","num_casa","telefone","especializacao","email","senha"), array($crmv,$nome,$bairro,$rua,$num_casa,$telefone,$especializacao,$email,$senha), "veterinario","WHERE id_veterinario = '$id'"); 
echo "<script> alert('Editado com sucesso'); location.href='../alterar_excluir/alterar_excluir_veterinario.php'</script>";
