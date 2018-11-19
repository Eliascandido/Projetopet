<?php

include("../../administrador/conexao/conexao.php");
include("../../administrador/conexao/fecha_conexao.php");

function atualizar($coluna,$valor,$tabela,$where){
    
    //arrays?
    if((is_array($coluna)) and ( is_array($valor))){
        
        //tem o mesmo numero de elementos?
        if(count($coluna) == count($valor)){
            
            $valor_coluna = NULL;
            
            // colocar arrays em uma string
            for($i=0;$i<count($coluna);$i++){
                
                $valor_coluna .="{$coluna[$i]} = '{$valor[$i]}',"; 
            }
            
            //tirando a virgula da ultima posição
            $valor_coluna = substr($valor_coluna,0, -1);
            
            //montar SQL
            
            $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
      
        }else{
            return false;
        }
    }else{
        //montar SQL 
        $atualizar = "UPDATE {$tabela} SET {$coluna} =  '{$valor}' {$where}";
    }
    //Conectou?
   
    if($conexao = connect()){
        //inseriu?
        if(mysqli_query($conexao, $atualizar)){
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

