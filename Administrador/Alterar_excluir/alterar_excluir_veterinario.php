<?php
include("../funcao/Funcao_select.php");

$consulta = select("veterinario", "*", NULL, "ORDER BY nome ASC");
?>
<html>
    <head>
        <meta charset="UTF-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/estilo_busca.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../telas_administrador/HomeAdministrador.php"><img src="../img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar veterinário<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../cadastros/CadastroVet.php">Cadastrar</a>
                            <a class="dropdown-item" href="alterar_excluir_veterinario.php">alterar/excluir</a>        
                        </div>
                    </li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
                </ul>	
            </div>
        </nav>
        <form class="form-group" action="../Buscas/Busca_veterinario.php" method="POST" id="busca">   

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                    <input type="text" name="pesquisar" id="pesquisar" placeholder="Buscar veterinário">
                </li>
            </ol>

        </form>

        <div class="table-responsive table-striped table-dark">
            <table class="table">        
                <thead>
                    <tr>
                        <th style="color: white;">Nº</th>
                        <th style="color: white;">Nome</th>
                        <th style="color: white;">CRMV:</th>
                        <th style="color: white;">Bairro:</th>
                        <th style="color: white;">Rua:</th>            
                        <th style="color: white;">NºCasa</th>
                        <th style="color: white;">Telefone</th>
                        <th style="color: white;">Especialização</th>
                        <th style="color: white;">Email</th>
                        <th style="color: white;">Senha</th>
                        <th style="color: white;">Alterar/excluir</th>
                    </tr>
                </thead>

                <?php
                if ($consulta == true) {
                    for ($i = 0; $i < count($consulta); $i++) {
                        ?>
                        <tbody>    
                            <tr>
                                <td style="color: white;"><?php echo $i + 1 ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['nome'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['crmv'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['bairro'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['rua'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['num_casa'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['telefone'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['especializacao'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['email'] ?></td>
                                <td style="color: white;"><?php echo $consulta [$i]['senha'] ?></td>
                                <td><a class="btn btn-secondary" role="button" href="../editar/editar_veterinario.php?id=<?php echo $consulta[$i]['id_veterinario']; ?>">Alterar</a> - 
                                    <a class="btn btn-danger" role="button" href="../excluir/excluir_veterinario.php?id=<?php echo $consulta[$i]['id_veterinario']; ?>">Excluir</a></td>
                            </tr>    
                        </tbody>

                        <?php
                    }
                } else {
                    echo "Nenhum dado encontrado!";
                }
                ?>
            </table> 
        </div>
        </div>
        <?php ?>  
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src = "../jquery/dist/jquery.js" ></script>
        <script src="../popper.js/dist/popper.js" ></script>
        <script src= "../js/bootstrap.js" ></script>
    </body>
</html>