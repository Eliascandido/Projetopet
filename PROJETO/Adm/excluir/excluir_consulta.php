<?php

include("../funcao/funcao_deleta.php");

$id = $_REQUEST['id'];   

deleta("consulta", "WHERE id_consulta = '$id'");
echo "<script> alert('Excluido com sucesso'); location.href='../alterar_excluir/alterar_excluir_consulta.php'</script>";


