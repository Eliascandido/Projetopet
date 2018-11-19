
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo_con.css">

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
                        <a class="dropdown-item" href="../cadastros/CadastroVet.php">Cadastrar</a>
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>        
                    </div>
                </li>  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar animal<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="../Cadastros/Cadastro_animal.php">Cadastrar</a>
                        <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_animal.php">alterar/excluir</a>        
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

                    <form action="../inserir/inserir_consulta.php" class="login" method="POST">
                        <h4>consulta</h4>
                        <br/>
                        <div class="form-group">
                           <label> Cliente:</label>
                            <select name="consultaCli">  
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

                        <div><br/>
                           <label> Animal</label>
                            <select name="consultaAni" >
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
                        <br/>
                        <div>
                            <label>Veterinário</label>
                            <select name="consultaVet" >
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>