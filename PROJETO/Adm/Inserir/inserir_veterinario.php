<?php

session_start();

include("../funcao/Funcao_inserir.php");

$crmv = filter_input(INPUT_POST, 'crmv', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$num_casa = filter_input(INPUT_POST, 'num_casa', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$especializacao = filter_input(INPUT_POST, 'especializacao', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_INT);

inserir(array("crmv","nome", "bairro", "rua", "num_casa", "telefone", "especializacao", "email", "senha"), array($crmv, $nome, $bairro, $rua, $num_casa, $telefone, $especializacao, $email, $senha), "veterinario"); 
echo "<script> alert('Cadastrado com sucesso'); location.href='../alterar_excluir/alterar_excluir_veterinario.php'</script>";