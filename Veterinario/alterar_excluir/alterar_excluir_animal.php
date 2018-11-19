<?php
session_start();
require("../funcao/funcao_protect.php");
include("../funcao/funcao_select.php");

$sql = mysqli_query(connect(), "SELECT animal.id_animal,animal.nome as NomeAnimal ,cliente.nome as NomeCliente, animal.especie, animal.raca, animal.sexo, animal.data_nascimento FROM cliente INNER join animal on cliente.id_cliente = animal.id_cliente");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <link rel="stylesheet" href="../../administrador/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../administrador/css/estilo_busca.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../telas_veterinario/tela_HomeVeterinario.php"><img src="../../administrador/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar animal<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../Cadastros/Cadastro_Animal.php">Cadastrar</a>
                            <a class="dropdown-item" href="alterar_excluir_animal.php">alterar/excluir</a>        
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar consulta<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../cadastros/CadastroConsulta.php">Cadastrar</a>
                            <a class="dropdown-item" href="alterar_excluir_consulta.php">alterar/excluir</a>        
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="../../Administrador/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
                </ul>	
            </div>
        </nav>
        
        <form class="form-group" action="../Buscas/Busca_animal.php" method="POST" id="busca">   
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <input type="text" name="pesquisar" class="form-control" id="pesquisar" placeholder="Buscar animal">
                </li>
            </ol>
        </form>
        
        <div class="table-responsive table-striped table-dark">
            <table class="table">

                <thead>
                    <tr>

                        <th>Animal</th>
                        <th>Cliente</th>
                        <th>Especie</th>
                        <th>raça</th>
                        <th>Sexo</th>
                        <th>data de nascimento</th>                   
                        <th>Alterar/excluir</th>
                    </tr>
                </thead>
                <?php while ($consulta = mysqli_fetch_assoc($sql)) { ?>
                    <tbody>    
                        <tr>                  
                            <td><?php echo $consulta['NomeAnimal'] ?></td>
                            <td><?php echo $consulta['NomeCliente'] ?></td>
                            <td><?php echo $consulta['especie'] ?></td>
                            <td><?php echo $consulta['raca'] ?></td>
                            <td><?php echo $consulta['sexo'] ?></td>
                            <td><?php echo $consulta['data_nascimento'] ?></td>                              
                            <td><a class="btn btn-secondary" role="button"  href="../editar/editar_animal.php?id=<?php echo $consulta['id_animal']; ?>">Alterar</a> - 
                                <a class="btn btn-danger" role="button"  href="../excluir/excluir_animal.php?id=<?php echo $consulta['id_animal']; ?>">Excluir</a></td>
                        </tr>    
                    </tbody>

                    <?php
                }
                ?>
            </table> 
        </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src = "../../administrador/jquery/dist/jquery.js" ></script>
            <script src="../../administrador/popper.js/dist/popper.js" ></script>
            <script src= "../../administrador/js/bootstrap.js" ></script>
    </body>
</html>