
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="author" content="Alisson"/>

            <meta name="viewport" content="width=device-width, initial-scale=1">	
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../css/estilo_editarCli.css">

        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <a class="navbar-brand" href="tela_homeCliente.php"><img src="../../Adm/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Agendamento<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consulta.php">Consulta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>

                    </ul>
                    <a class="navbar-brand" href="../Cadastros/Cadastro_Animal.php"><img src="../../adm/img/registro2.png" alt="" width="30px" class="d-inline-block align-top" alt="">Cadastrar animal</a>
                    <a class="navbar-brand" href="../../adm/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>

                </div>
            </nav>  

            <header>

                <div class="container-fluid">		
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <?php
                            include '../../adm/conexao/conexao.php';
                            
                            $id = $_REQUEST['id'];
                            mysqli_query(connect(),"SELECT consulta WHERE id_cliente = '$id'");
                            
                            
                            ?>
                            <?php while ($consulta = mysqli_fetch_assoc($sql)) { ?>

                                <form name = "login_sys" class = "login" action = "../atualizar/atualizar_consulta.php" method = "POST">

                                    <h1>
                                        Editar cliente
                                    </h1>
                                    <div class="form-group">
                                        <label>Cliente</label>
                                        <input class="nav-item nav-link disabled"  value = "<?php echo $consulta['nomeCliente']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Veterinario</label>
                                        <input  name = "veterinario" class="nav-item nav-link disabled" value = "<?php echo $consulta['nomeVeterinario']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Animal</label>
                                        <input name = "animal" class="nav-item nav-link disabled" value = "<?php echo $consulta['nomeAnimal']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Requerimento</label>
                                        <input type = "text" class = "form-control" name = "requerimento" placeholder = "Cpf" value = "<?php echo $consulta['requerimento']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Relatorio</label>
                                        <input type = "text" name = "relatorio" class = "form-control" placeholder = "Bairro" value = "<?php echo $consulta['relatorio']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Data</label>
                                        <input type = "date" name = "data" class = "form-control" placeholder = "NºCasa" value = "<?php echo $consulta['data']; ?>"required>
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
                    <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin = "anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                </div>
            </header>
        </body>

    </html>




