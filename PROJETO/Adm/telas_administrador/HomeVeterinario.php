<?php
session_start();
require("../funcao/funcao_protect.php");
include("../funcao/funcao_select.php");
$consultaAni = select("animal", "*", NULL, "ORDER BY nome ASC");
$consulta = select("cliente", "*", NULL, "ORDER BY nome ASC");

?>
<head>
    <meta charset="UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_telaVeterinario.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="HomeVeterinario.php"><img src="../img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar cliente<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="../Cadastros/Cadastro_Cliente.php">Cadastrar</a>
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir.php">alterar/excluir</a>        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar administrador<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="../cadastros/CadastroVet.php">Cadastrar</a>
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>        
                    </div>
                </li>  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar animal<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="../Cadastros/Cadastro_animal.php">Cadastrar</a>
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_animal.php">alterar/excluir</a>        
                    </div>
                </li>
                 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar consulta<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../cadastros/CadastroConsulta_adm.php">Cadastrar</a>
                            <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_consulta.php">alterar/excluir</a>        
                        </div>
                    </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
            </ul>	
        </div>
    </nav> 
    
    <h2> tela administrador</h2>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</html>        
