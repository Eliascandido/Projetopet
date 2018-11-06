<?php

include("../../adm/funcao/funcao_select_login.php");
include("../../adm/funcao/funcao_protect.php");


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_INT);


$consulta = selectlogin("cliente", "*", "WHERE email='$email' AND senha='$senha'");
$consultaVet = selectlogin("veterinario", "*", "WHERE email='$email' AND senha='$senha'");

if ($consulta == true) {
    for ($i = 0; $i < count($consulta); $i++) {
            $nome = $consulta[$i]['nome'];
          
            session_start();
            $_SESSION['permissao'] = 1;     
            echo "<script> alert('Bem vindo $nome '); location.href='../../usuario/telas_usuario/tela_homeCliente.php'</script>";      
            $_SESSION['email'] = $email; 
}   
}else if ($consultaVet == true) {
    for ($i = 0; $i < count($consultaVet); $i++) {
            $nomeVet = $consultaVet[$i]['nome'];
            
            session_start();
            $_SESSION['permissaoAdm'] = 3;     
            echo "<script> alert('Bem vindo $nomeVet'); location.href='../../Adm/telas_administrador/HomeVeterinario.php'</script>";
    }
}else {
    echo "<script> alert('Usuario ou senha incorretos'); location.href='../../usuario/telas_usuario/tela_login.php'</script>";
}


    

    




