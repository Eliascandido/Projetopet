<?php
include('../../administrador/conexao/conexao.php');

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];

$sql = mysqli_query(connect(), "select animal.nome as nomeAnimal, cliente.nome as nomeCliente, veterinario.nome as nomeVeterinario, consulta.id_consulta, consulta.requerimento, consulta.relatorio, consulta.data from cliente join consulta on cliente.id_cliente = consulta.id_cliente join animal on animal.id_animal = consulta.id_animal join veterinario on veterinario.id_veterinario = consulta.id_vet WHERE consulta.data BETWEEN '$data1' AND '$data2'");
$sql2 = mysqli_query(connect(), "select animal.nome as nomeAnimal, cliente.nome as nomeCliente, veterinario.nome as nomeVeterinario, consulta.id_consulta, consulta.requerimento, consulta.relatorio, consulta.data from cliente join consulta on cliente.id_cliente = consulta.id_cliente join animal on animal.id_animal = consulta.id_animal join veterinario on veterinario.id_veterinario = consulta.id_vet WHERE consulta.data='$data1'");
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

    <div class="table-responsive table-striped table-dark">
        <table class="table">
            <thead>
                <tr>
                    <th style="color: white;">Animal</th>
                    <th style="color: white;">Cliente</th>
                    <th style="color: white;">Veterinario</th>
                    <th style="color: white;">requerimento</th>
                    <th style="color: white;">relatorio</th>
                    <th style="color: white;">data</th>                   
                    <th style="color: white;">Alterar/excluir</th>
                </tr>
            </thead> 

            <tbody>
                <?php
                if (mysqli_num_rows($sql) > 0) {

                    while (($consulta = mysqli_fetch_assoc($sql))) {
                        ?>
                        <tr>
                            <td style="color: white;"><?php echo $consulta['nomeAnimal'] ?></td>
                            <td style="color: white;"><?php echo $consulta['nomeCliente']; ?></td>
                            <td style="color: white;"><?php echo $consulta['nomeVeterinario'] ?></td>
                            <td style="color: white;"><?php echo $consulta['requerimento'] ?></td>
                            <td style="color: white;"><?php echo $consulta['relatorio'] ?></td>
                            <td style="color: white;"><?php echo $consulta['data'] ?></td>                              
                            <td style="color: white;"><a class="btn btn-secondary" role="button"  href="../editar/editar_consulta.php?id=<?php echo $consulta['id_consulta']; ?>">Alterar</a> - 
                                <a class="btn btn-danger" role="button"  href="../excluir/excluir_consulta.php?id=<?php echo $consulta['id_consulta']; ?>">Excluir</a></td>

                        </tr>    
                        <?php
                    }
                } else if (mysqli_num_rows($sql2) > 0) {

                    while (($consulta2 = mysqli_fetch_assoc($sql2))) {
                        ?>
                        <tr>
                            <td style="color: white;"><?php echo $consulta2['nomeAnimal'] ?></td>
                            <td style="color: white;"><?php echo $consulta2['nomeCliente']; ?></td>
                            <td style="color: white;"><?php echo $consulta2['nomeVeterinario'] ?></td>
                            <td style="color: white;"><?php echo $consulta2['requerimento'] ?></td>
                            <td style="color: white;"><?php echo $consulta2['relatorio'] ?></td>
                            <td style="color: white;"><?php echo $consulta2['data'] ?></td>                              
                            <td style="color: white;"><a class="btn btn-secondary" role="button"  href="../editar/editar_consulta.php?id=<?php echo $consulta2['id_consulta']; ?>">Alterar</a> - 
                                <a class="btn btn-danger" role="button"  href="../excluir/excluir_consulta.php?id=<?php echo $consulta2['id_consulta']; ?>">Excluir</a></td>

                        </tr>
                    </tbody>
                </table>  
            </div>
            <?php
        }
    } else {
        echo "Nenhum dado encontrado";
    }
    ?>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "../../Administrador/jquery/dist/jquery.js" ></script>
<script src="../../Administrador/popper.js/dist/popper.js" ></script>
<script src= "../../Administrador/js/bootstrap.js" ></script>
</html>

