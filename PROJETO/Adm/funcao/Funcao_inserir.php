<?php

include("../conexao/conexao.php");
include("../conexao/fecha_conexao.php");

function inserir($coluna,$valor,$tabela){
    
    //arrays?
    if((is_array($coluna)) and ( is_array($valor))){
        
        //tem o mesmo numero de elementos?
        if(count($coluna) == count($valor)){
            
            //montar SQL 
            $inserir = "INSERT INTO {$tabela} (".implode(', ',$coluna).") VALUES ('".implode('\', \'',$valor)."')";
                //implode pega todas as colunas e joga no sql seguido de uma virgula 
        }else{          
            return false;
        }
    }else{
        //montar SQL 
        $inserir = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
    }
    //Conectou?
   
    if($conexao = connect()){
        //inseriu?
        if(mysqli_query($conexao, $inserir)){
            //fecha Conexao
            fechaConexao($conexao);
            return true;
        }else{
            echo "Query inválida!";
            return false;
        }
    }else{
        return false;
    }
    }

