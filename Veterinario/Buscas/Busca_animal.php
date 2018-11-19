<?php
include('../funcao/funcao_select.php');

$pesquisar = $_POST['pesquisar'];

$consulta = select("animal", "*", "WHERE nome LIKE '%$pesquisar%'");

$consultaCli = select("cliente", "*", "");
?>
<head>
    <meta charset="UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="../../administrador/css/bootstrap.css">
    <link rel="stylesheet" href="../../Administrador/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../../Administrador/css/estilo.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../telas_veterinario/tela_homeVeterinario.php"><img src="../../Administrador/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar animal<span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="../cadastros/Cadastro_Animal.php">Cadastrar</a>
                    <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_animal.php">alterar/excluir</a>        
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar consulta<span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="../cadastros/CadastroConsulta.php">Cadastrar</a>
                    <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_consulta.php">alterar/excluir</a>        
                </div>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <a class="navbar-brand" href="../../Administrador/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
        </ul>	
    </div>
</nav> 
<body>
    <table class="table table-striped table-dark">
        <h1> Lista de animais</h1>
        <thead>
            <tr>
                <th>Nº</th>
                <th>Animal</th>
                <th>Cliente</th>
                <th>Especie</th>
                <th>raça</th>
                <th>Sexo</th>
                <th>data de nascimento</th>                   
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
                        <td><?php echo $consultaCli[$i]['nome'] ?></td>
                        <td><?php echo $consulta [$i]['especie'] ?></td>
                        <td><?php echo $consulta [$i]['raca'] ?></td>
                        <td><?php echo $consulta [$i]['sexo'] ?></td>
                        <td><?php echo $consulta [$i]['data_nascimento'] ?></td>                              
                        <td><a class="btn btn-secondary" role="button"  href="../editar/editar_animal.php?id=<?php echo $consulta[$i]['id_animal']; ?>">Alterar</a> - 
                            <a class="btn btn-danger" role="button"  href="../excluir/excluir_animal.php?id=<?php echo $consulta[$i]['id_animal']; ?>">Excluir</a></td>
                    </tr>    
                </tbody>

                <?php
            }
        } else {
            echo "Nenhum dado encontrado!";
        }
        ?>
    </table>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "../../Administrador/jquery/dist/jquery.js" ></script>
<script src="../../Administrador/popper.js/dist/popper.js" ></script>
<script src= "../../Administrador/js/bootstrap.js" ></script>
</html>