<?php
 
function connect($banco = "pet",$usuario = "root",$senha = "",$hostname = "localhost"){
    
    $connect = mysqli_connect($hostname, $usuario, $senha, $banco);
    
if(!$connect){
    die(trigger_error("não foi possivel estabelecer a conexão!"));
    return false;
}else{
    //seleciona banco
    $db = mysqli_select_db($connect, $banco);
    if(!$db){
        die(trigger_error("não foi possivel selecionar o banco de dados"));
        return false;
    }else{
        return $connect;
    }
}
}

