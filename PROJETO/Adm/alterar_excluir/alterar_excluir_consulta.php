<?php
session_start();
require("../funcao/funcao_protect.php");

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
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_consulta.php">alterar/excluir</a>        
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
            </ul>	
        </div>
    </nav>
    <table class="table table-striped table-dark">
        <h1> Lista de consultas</h1>
        <thead>
            <tr>
                <th>Animal</th>
                <th>Cliente</th>
                <th>Veterinario</th>
                <th>requerimento</th>
                <th>relatorio</th>
                <th>data</th>                   
                <th>Alterar/excluir</th>
            </tr>
        </thead>
        <?php
        include '../conexao/conexao.php';
        
        $sql = mysqli_query(connect(), "select animal.nome as nomeAnimal, cliente.nome as nomeCliente, veterinario.nome as nomeVeterinario, consulta.id_consulta, consulta.requerimento, consulta.relatorio, consulta.data from cliente join consulta on cliente.id_cliente = consulta.id_cliente join animal on animal.id_animal = consulta.id_animal join veterinario on veterinario.id_veterinario = consulta.id_vet
"); 
      ?>
        <?php 
                      while ($consulta = mysqli_fetch_assoc($sql)) { ?>
         <tbody>    
            <tr>
                  
                        <td><?php echo $consulta['nomeAnimal']?></td>
                        <td><?php echo $consulta['nomeCliente'];?></td>
                        <td><?php echo $consulta['nomeVeterinario']?></td>
                        <td><?php echo $consulta['requerimento'] ?></td>
                        <td><?php echo $consulta['relatorio'] ?></td>
                        <td><?php echo $consulta['data'] ?></td>                              
                        <td><a class="btn btn-secondary" role="button"  href="../editar/editar_consulta.php?id=<?php echo $consulta['id_consulta']; ?>">Alterar</a> - 
                            <a class="btn btn-danger" role="button"  href="../excluir/excluir_consulta.php?id=<?php echo $consulta['id_consulta']; ?>">Excluir</a></td>
                        <?php } ?>
                    </tr>    
                </tbody>
                    
             
    </table>   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
