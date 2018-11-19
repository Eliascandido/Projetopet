<?php

include("../funcao/funcao_select_login.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$consulta = selectlogin("cliente", "*", "WHERE email='$email' AND senha='$senha'");
$consultaVet = selectlogin("veterinario", "*", "WHERE email='$email' AND senha='$senha'");
$consultaAdm = selectlogin("administrador", "*", "WHERE email='$email' AND senha='$senha'");

if ($consulta == true) {
    for ($i = 0; $i < count($consulta); $i++) {
            $nome = $consulta[$i]['nome'];
            $id = $consulta[$i]['id_cliente'];
            session_start();
            $_SESSION['permissao'] = 1;     
            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $nome;
            echo "<script> alert('Bem-vindo $nome '); location.href='../../usuario/telas_usuario/tela_homeCliente.php'</script>";      
            
            
}   
}else if ($consultaVet == true) {
    for ($i = 0; $i < count($consultaVet); $i++) {
            $nomeVet = $consultaVet[$i]['nome'];
            
            session_start();
            $_SESSION['permissaoVet'] = 3;     
            echo "<script> alert('Bem-vindo $nomeVet'); location.href='../../Veterinario/telas_veterinario/tela_homeVeterinario.php'</script>";
    }
}else if($consultaAdm == true){
      for ($i = 0; $i < count($consultaAdm); $i++) {
            $nomeAdm = $consultaAdm[$i]['Nome'];
            
            session_start();
            $_SESSION['permissaoAdm'] = 4;     
            echo "<script> alert('Bem-vindo $nomeAdm'); location.href='../telas_administrador/HomeAdministrador.php'</script>";
    }
    
}


else {
    echo "<script> alert('Usuario ou senha incorretos'); location.href='../../index.html'</script>";
}


    

    




