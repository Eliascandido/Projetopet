<?php
$id = $_REQUEST['id'];
?>
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="author" content="Alisson"/>

            <meta name="viewport" content="width=device-width, initial-scale=1">	
            <link rel="stylesheet" href="../../Administrador/css/bootstrap.css" >
            <link rel="stylesheet" type="text/css" href="../../Administrador/css/estilo_editarCon.css">

        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../telas_veterinario/tela_HomeVeterinario.php"><img src="../../Administrador/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
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
            <header>

                <div class="container-fluid">		
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <?php
                            include '../../administrador/conexao/conexao.php';

                            $sql = mysqli_query(connect(), "select animal.nome as nomeAnimal, cliente.nome as nomeCliente, veterinario.nome as 
                                nomeVeterinario, consulta.id_consulta, consulta.requerimento, consulta.relatorio, consulta.data from cliente join
                                consulta on cliente.id_cliente = consulta.id_cliente join animal on animal.id_animal = consulta.id_animal join 
                                veterinario on veterinario.id_veterinario = consulta.id_vet where id_consulta = '$id'
");
                            ?>
                            <?php while ($consulta = mysqli_fetch_assoc($sql)) { ?>

                                <form name = "login_sys" class = "login" action = "../atualizar/atualizar_consulta.php" method = "POST">

                                    <h1>
                                        Editar Consulta
                                    </h1>
                                    <div class="form-group">
                                        <label>Cliente</label>
                                        <input class="nav-item nav-link disabled"    value = "<?php echo $consulta['nomeCliente']; ?>"required disabled="true">
                                    </div>
                                    <div>
                                        <label>Veterinario</label>
                                        <input  name = "veterinario" class="nav-item nav-link disabled"  value = "<?php echo $consulta['nomeVeterinario']; ?>"required disabled="true">
                                    </div>
                                    <div>
                                        <label>Animal</label>
                                        <input name = "animal" class="nav-item nav-link disabled" value = "<?php echo $consulta['nomeAnimal']; ?>"required disabled="true">
                                    </div>
                                    <div>
                                        <label>Requerimento</label>
                                        <input type = "text" class = "form-control" name = "requerimento" placeholder = "Requerimento" value = "<?php echo $consulta['requerimento']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Relatório</label>
                                        <input type = "text" name = "relatorio" class = "form-control" placeholder = "Relatório" value = "<?php echo $consulta['relatorio']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Data</label>
                                        <input type = "date" name = "data" class = "form-control" placeholder = "Data" value = "<?php echo $consulta['data']; ?>"required>
                                    </div>
                                    <br/>
                                    <div>
                                        <button type = "submit" value = "Atualizar" method = "post" class = "btn btn-primary btn-success btn-block">Editar</button>
                                        <input type = "hidden" value = "<?php echo $id; ?>" id = "id" name = "id"/>
                                    </div>
                                </form>
                            <?php } ?>

                        </div>
                        <div class = "col-md-4 col-sm-4 col-xs-12"></div>
                    </div>
                    <script src = "../../administrador/jquery/dist/jquery.js" ></script>
                <script src="../../administrador/popper.js/dist/popper.js" ></script>
                <script src= "../../administrador/js/bootstrap.js" ></script>
                </div>
            </header>
        </body>

    </html>

