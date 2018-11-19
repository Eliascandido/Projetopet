<?php

include("../../administrador/conexao/conexao.php");
include("../../administrador/conexao/fecha_conexao.php");

function deleta($tabela,$where=NULL){
    
    //montar sql
    $delete = "DELETE FROM {$tabela} {$where}";
    
    // conectou?
    if($con = connect()){
        if(mysqli_query($con,$delete)){
            //fechar sessão
            fechaConexao($con);
            return true;
        }else{
            //Mostrar uma msg de erro
            echo "Query Invalida {$delete}";
            return false;
        }
    }else{
        return false;
    }
}

