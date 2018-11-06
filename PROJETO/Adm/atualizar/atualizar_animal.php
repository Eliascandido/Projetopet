<?php
    include("../funcao/Funcao_atualizar.php");
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
    $especie = filter_input(INPUT_POST, 'especie', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_NUMBER_INT);

    atualizar(array("nome", "raca", "especie", "sexo","data_nascimento"), array($nome,$raca,$especie,$sexo,$data_nascimento), "animal","WHERE id_animal = '$id'"); 
   echo "<script> alert('Editado com sucesso'); location.href='../alterar_excluir/alterar_excluir_animal.php'</script>";
   
?>