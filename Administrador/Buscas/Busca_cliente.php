<?php
include('../funcao/funcao_select.php');

$pesquisar = $_POST['pesquisar'];

$consulta = select("cliente", "*", "WHERE nome LIKE '%$pesquisar%'");
?>
<head>
    <meta charset="UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
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
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar veterinário<span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="../cadastros/CadastroVet.php">Cadastrar</a>
                    <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>        
                </div>
            </li>  

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
        </ul>	
    </div>
</nav> 
<body>
    <table class="table table-striped table-dark">
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
        <?php ?>
    </table>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "../jquery/dist/jquery.js" ></script>
<script src="../popper.js/dist/popper.js" ></script>
<script src= "../js/bootstrap.js" ></script>
</html>