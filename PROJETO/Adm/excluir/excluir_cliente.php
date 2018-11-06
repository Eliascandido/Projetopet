<?php

include("../funcao/funcao_deleta.php");

 $id = $_REQUEST['id'];   

 deleta("cliente", "WHERE id_cliente = '$id'");
echo "<script> alert('Excluido com sucesso'); location.href='../alterar_excluir/alterar_excluir.php'</script>";

