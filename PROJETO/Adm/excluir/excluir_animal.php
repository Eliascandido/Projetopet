<?php

include("../funcao/funcao_deleta.php");

 $id = $_REQUEST['id'];   

 deleta("animal", "WHERE id_animal = '$id'");
echo "<script> alert('Excluido com sucesso'); location.href='../alterar_excluir/alterar_excluir_animal.php'</script>";


