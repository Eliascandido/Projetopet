
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="../../administrador/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../Administrador/css/estilo_con.css">

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
                            <a class="dropdown-item" href="Cadastro_Animal.php">Cadastrar</a>
                            <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_animal.php">alterar/excluir</a>        
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar consulta<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="CadastroConsulta.php">Cadastrar</a>
                            <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_consulta.php">alterar/excluir</a>        
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="../../Administrador/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
                </ul>	
            </div>
        </nav>
        <?php
        include("../funcao/funcao_select.php");

        $consultaCli = select("cliente", "*", "");
        $consultaVet = select("veterinario", "*", "");
        $consultaAni = select("animal", "*", "");
        ?>
        <div class="container-fluid">		
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form action="../Inserir/inserir_consulta.php" class="login" method="POST">
                        <h1>Consulta</h1>
                        <br/>
                        <div class="form-group" class="form-control">
                            <h4> Cliente:</h4>
                            <select name="consultaCli" class="form-control">  
                                <?php
                                if ($consultaCli == true) {
                                    for ($i = 0; $i < count($consultaCli); $i++) {
                                        echo "<option value=" . $consultaCli[$i]['id_cliente'] . ">" . $consultaCli[$i]['nome'] . "</option>";
                                        $re = $consultaCli[$i]['id_cliente'];
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <h4> Animal</h4>
                            <select name="consultaAni" class="form-control">
                                <?php
                                if ($consultaAni == true) {
                                    for ($i = 0; $i < count($consultaAni); $i++) {
                                        echo "<option value=" . $consultaAni[$i]['id_animal'] . ">" . $consultaAni[$i]['nome'] . "</option>";
                                        $re = $consultaAni[$i]['id_animal'];
                                    }
                                }
                                ?>
                            </select>     
                        </div>
                       
                        <div>
                            <h4>Veterinário</h4>
                            <select name="consultaVet" class="form-control">
                                <?php
                                if ($consultaVet == true) {
                                    for ($i = 0; $i < count($consultaVet); $i++) {
                                        echo "<option value=" . $consultaVet[$i]['id_veterinario'] . ">" . $consultaVet[$i]['nome'] . "</option>";
                                        $re = $consultaVet[$i]['id_veterinario'];
                                    }
                                }
                                ?>
                            </select>
                        </div>
                       <br/>
                        <div>
                            <label>Relatorio</label>
                            <input type="text" class="form-control" name="relatorio" placeholder="Relatorio" required/>
                        </div>
                        <div>
                            <label>Requerimento</label>
                            <input type="text" class="form-control" name="requerimento" placeholder="Requerimento" required/>
                        </div>

                        <div>
                            <label>Data</label>
                            <input type="date" class="form-control" name="data" required/>
                        </div>
                        <br/>
                        <div>
                            <button type="submit" value="Registrar" method="post" class="btn btn-primary btn-success btn-block">Marcar Consulta</button>
                            <input type="hidden" name="acao" method="post" value="inserir" />
                        </div>
                    </form> 
                </div>                    
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src = "../../Administrador/jquery/dist/jquery.js" ></script>
        <script src="../../Administrador/popper.js/dist/popper.js" ></script>
        <script src= "../../Administrador/js/bootstrap.js" ></script>
    </body>
</html>