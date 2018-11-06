<?php

include("../funcao/funcao_deleta.php");

 $id = $_REQUEST['id'];   

 deleta("veterinario", "WHERE id_veterinario = '$id'");
echo "<script> alert('Excluido com sucesso'); location.href='../Alterar_excluir/alterar_excluir_veterinario.php'</script>";


