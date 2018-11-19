<?php  
    function protegerUser(){
         if($_SESSION['permissao'] != 1){
            echo"<script> location.href='../../home.html'</script>";
        }
        
    }
    function protegerVet(){
         if($_SESSION['permissao'] != 3){
            echo"<script> location.href='../home.html'</script>";
        }
        
    }

