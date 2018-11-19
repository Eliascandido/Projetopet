<?php
    session_start();
    
    include("../funcao/funcao_inserir.php");
    $consultaAni = filter_input(INPUT_POST, 'consultaAni', FILTER_SANITIZE_NUMBER_INT);
    $consultaCli = filter_input(INPUT_POST, 'consultaCli', FILTER_SANITIZE_NUMBER_INT);
    $consultaVet = filter_input(INPUT_POST, 'consultaVet', FILTER_SANITIZE_NUMBER_INT);
    $requerimento =  filter_input(INPUT_POST, 'requerimento', FILTER_SANITIZE_STRING);
    $relatorio = filter_input(INPUT_POST, 'relatorio', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);
 
    inserir(array("id_animal","id_cliente","id_vet","requerimento","relatorio","data"), array($consultaAni,$consultaCli,$consultaVet,$requerimento,$relatorio,$data), "consulta"); 
    echo "<script> alert('Consulta cadastrado com sucesso!!!'); location.href='../alterar_excluir/alterar_excluir_consulta.php'</script>";
?>