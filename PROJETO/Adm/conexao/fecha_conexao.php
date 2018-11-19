<?php

function fechaConexao($conexao){
   $fecha = mysqli_close($conexao);
   if(!$fecha){
       echo "Impossivel fechar a conexao";
       return false;
   }else{
       return true;
   }
}
