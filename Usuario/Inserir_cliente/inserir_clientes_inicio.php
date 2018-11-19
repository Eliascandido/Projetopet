<?php
include("../funcao/Funcao_inserir_inicio.php");

$id= filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$bairro= filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua= filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$num_casa = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

inserir(array("nome","cpf", "bairro", "rua", "num_casa", "telefone"," email", "senha"), array($nome,$cpf,$bairro,$rua,$num_casa,$telefone,$email,$senha), "cliente"); 
         echo "<script> alert('Cadastrado com sucesso'); location.href='../../Index.html'</script>";
      


    
