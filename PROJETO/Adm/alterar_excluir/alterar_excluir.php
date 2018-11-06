<?php
session_start();
require("../funcao/funcao_protect.php");
include("../funcao/funcao_select.php");

$consulta = select("cliente", "*", NULL, "ORDER BY nome ASC");

?>

<head>
    <meta charset="UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_busca.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../telas_administrador/HomeVeterinario.php"><img src="../img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
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
                        <a class="dropdown-item" href="../Cadastros/CadastroVet.php">Cadastrar</a>
                        <a class="dropdown-item" href="alterar_excluir_veterinario.php">alterar/excluir</a>        
                    </div>
                </li>  
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
                        <a class="dropdown-item" href="../cadastros/CadastroConsulta_adm.php">Cadastrar</a>
                        <a class="dropdown-item" href="alterar_excluir_consulta.php">alterar/excluir</a>        
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
            </ul>	
        </div>
    </nav>
   
    
    <form class="form-group" action="../Buscas/Busca_cliente.php" method="POST" id="busca">   
         <h1>Buscar cliente</h1>
        <button type="submit" value="Buscar" method="post" class="btn btn-outline-primary">Buscar</button>
        <input type="text" name="pesquisar" id="pesquisar" >
    </form>
    <table class="table table-striped table-dark">
        <h1> Lista de clientes</h1>
        <thead>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>NºCasa</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Senha</th>                     
                <th>Alterar/excluir</th>
            </tr>
        </thead>
        <?php
        if ($consulta == true) {
            for ($i = 0; $i < count($consulta); $i++) {
                ?>
                <tbody>    
                    <tr>
                        <td><?php echo $i + 1 ?></td>
                        <td><?php echo $consulta [$i]['nome'] ?></td>
                        <td><?php echo $consulta [$i]['cpf'] ?></td>
                        <td><?php echo $consulta [$i]['bairro'] ?></td>
                        <td><?php echo $consulta [$i]['rua'] ?></td>
                        <td><?php echo $consulta [$i]['num_casa'] ?></td>
                        <td><?php echo $consulta [$i]['telefone'] ?></td>
                        <td><?php echo $consulta [$i]['email'] ?></td>
                        <td><?php echo $consulta [$i]['senha'] ?></td>                              
                        <td><a class="btn btn-secondary" role="button"  href="../editar/editar_cliente.php?id=<?php echo $consulta[$i]['id_cliente']; ?>">Alterar</a> - 
                            <a class="btn btn-danger" role="button"  href="../excluir/excluir_cliente.php?id=<?php echo $consulta[$i]['id_cliente']; ?>">Excluir</a></td>
                    </tr>    
                </tbody>

                <?php
            }
        } else {
            echo "Nenhum dado encontrado!";
        }
        ?>
    </table>   
    <?php ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
