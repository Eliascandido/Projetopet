<?php
    session_start();
    
    include("../funcao/Funcao_inserir.php");
    
    $consultacli = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $especie = filter_input(INPUT_POST, 'especie', FILTER_SANITIZE_STRING);
    $raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $data_nascimento = filter_input(INPUT_POST,'data_nascimento', FILTER_SANITIZE_NUMBER_INT);
    
    $sql = inserir(array("especie","nome","id_cliente","raca", "sexo","data_nascimento"), array($especie,$nome,$consultacli,$raca,$sexo,$data_nascimento), "animal"); 
    echo "<script> alert('Cadastrado com sucesso!!!'); location.href='../alterar_excluir/alterar_excluir_animal.php'</script>";
?>

