<?php
include("../funcao/funcao_select.php");
$id = $_REQUEST['id'];
$consulta = select("veterinario", "*", "WHERE id_veterinario = '$id'", "ORDER BY nome ASC");
?>


<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="author" content="Alisson"/>

            <meta name="viewport" content="width=device-width, initial-scale=1">	
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="css/estiloregistro.css">

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
                                <a class="dropdown-item" href="../Cadastros/CadastroVet.php">Cadastrar</a>
                                <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>        
                            </div>
                        </li>  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar animal<span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="../cadastros/Cadastro_Animal.php">Cadastrar</a>
                                <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_consulta.php">alterar/excluir</a>        
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
            <div class="container-fluid">		
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">

                        <?php
                        if ($consulta == true) {
                            for ($i = 0; $i < count($consulta); $i++) {
                                ?>     

                                <form name = "login_sys" class = "login" action = "../atualizar/atualizar_veterinario.php" method = "POST">
                                    <section class = "center" id = "info">
                                    </section>
                                    <h1>
                                        Editar Veterinario
                                    </h1>
                                    <div class = "form-group">
                                        <label>crmv</label>
                                        <input type = "number" name = "crmv" class = "form-control" placeholder = "crmv" value="<?php echo $consulta[$i]['crmv']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Nome</label>
                                        <input type = "text" name = "nome" class = "form-control" placeholder = "Nome" value="<?php echo $consulta[$i]['nome']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Bairro</label>
                                        <input type = "text" name = "bairro" class = "form-control" placeholder = "Bairro" value="<?php echo $consulta[$i]['bairro']; ?>"required>
                                    </div>
                                    <div>
                                        <label>rua</label>
                                        <input type = "text" class = "form-control" name = "rua" placeholder = "Rua" value="<?php echo $consulta[$i]['rua']; ?>"required>
                                    </div>
                                    <div>
                                        <label>NºCasa</label>
                                        <input type = "number" name = "num_casa" class = "form-control" placeholder = "Nºcasa" value="<?php echo $consulta[$i]['num_casa']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Telefone</label>
                                        <input type = "number" name = "telefone" class = "form-control" placeholder = "telefone" value="<?php echo $consulta[$i]['telefone']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Especializacao</label>
                                        <input type = "text" class = "form-control" name = "especializacao" placeholder = "especializacao" value="<?php echo $consulta[$i]['especializacao']; ?>"required>
                                    </div>
                                    <div>
                                        <label>Email</label>
                                        <input type = "email" class = "form-control" name = "email" placeholder = "email" value="<?php echo $consulta[$i]['email']; ?>"required>
                                    </div>
                                    <div>
                                        <label>senha</label>
                                        <input type = "password" class = "form-control" name = "senha" placeholder = "Senha" value="<?php echo $consulta[$i]['senha']; ?>"required>
                                    </div>

                                    <br/>

                                    <div>
                                        <button type = "submit" value = "Atualizar" method = "post" class = "btn btn-primary btn-success btn-block">Atualizar</button>
                                        <input type = "hidden" value = "<?php echo $id; ?>" id="id" name="id"/>
                                    </div>
                                </form>
                                <?php
                            }
                        } else {
                            echo "Nenhum dado encontrado!";
                        }
                        ?>

                    </div>
                    <div class = "col-md-4 col-sm-4 col-xs-12"></div>
                </div>
                <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin = "anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </div>
        </body>

    </html>


