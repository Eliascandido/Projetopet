<?php
include("../funcao/funcao_select.php");
$id = $_REQUEST['id'];
$consulta = select("animal", "*", "WHERE id_animal = '$id'", "ORDER BY nome ASC");

?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="author" content="Alisson"/>

            <meta name="viewport" content="width=device-width, initial-scale=1">	
            <link rel="stylesheet" href="../../Administrador/css/bootstrap.css" >
            <link rel="stylesheet" type="text/css" href="../../Administrador/css/estilo_editarAni.css">

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
                            if ($consulta == true) {
                                for ($i = 0; $i < count($consulta); $i++) {
                                    ?>     
                            
                                    <form name = "login_sys" class = "login" action = "../atualizar/atualizar_animal.php" method = "POST">
                                        <section class = "center" id = "info">
                                        </section>
                                        <h1>
                                            Editar Animal
                                        </h1>
                                        <div class = "form-group">
                                            <label>Nome</label>
                                            <input type = "text" name = "nome"class = "form-control" placeholder = "Nome" value="<?php echo $consulta[$i]['nome'];?>"required>
                                        </div>
                                        <div>
                                            <label>Raça</label>
                                            <input type = "text" name = "raca" class = "form-control" placeholder = "Raca" value="<?php echo $consulta[$i]['raca'];?>"required>
                                        </div>
                                        <div>
                                            <label>Especie</label>
                                            <input type = "text" name = "especie" class = "form-control"  placeholder = "Especie" value="<?php echo $consulta[$i]['especie'];?>"required>
                                        </div>
                                        <div>
                                            <label>Sexo</label>
                                            <input type = "number_format" class = "form-control" name = "sexo" placeholder = "sexo" value="<?php echo $consulta[$i]['sexo'];?>"required>
                                        </div>
                                        <div>
                                            <label>Data_nascimento</label>
                                            <input type = "date" name = "data_nascimento" class = "form-control" placeholder = "data" value="<?php echo $consulta[$i]['data_nascimento'];?>"required>
                                        </div>
                                        <br/>

                                        <div>
                                            <button type = "submit" value = "Atualizar" method = "post" class = "btn btn-primary btn-success btn-block">Atualizar</button>
                                            <input type = "hidden" value = "<?php echo $id;?>" id="id" name="id"/>
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
                    <script src = "../../Administrador/jquery/dist/jquery.js" ></script>
                    <script src="../../Administrador/popper.js/dist/popper.js" ></script>
                    <script src= "../../Administrador/js/bootstrap.js" ></script>
                </div>
            </header>
        </body>

    </html>

