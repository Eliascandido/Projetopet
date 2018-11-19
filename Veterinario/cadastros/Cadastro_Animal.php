
<?php
include("../funcao/funcao_select.php");
$consulta = select("animal", "*", "");
$consultacli = select("cliente", "*", "");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <link rel="stylesheet" href="../../Administrador/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../Administrador/css/estilo_ani.css">
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
    <head>
        <meta charset="UTF-8">
        <title>Casdastro de Animal</title>
    </head>
    <div class="container-fluid">		
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">  
                        <form class="login" action="../Inserir/inserir_animal.php" method="POST">
                            <h1> Cadastro animal</h1>
                            <label>Nome</label>
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required/>

                                <label>Espécie:</label>
                                <input type="text" name="especie" class="form-control" placeholder="Especie" required/>

                                <label>Raça:</label>
                                <input type="text" name="raca" class="form-control" placeholder="Raça" required/>

                                <label>Sexo:</label>
                                <input type="text" name="sexo" class="form-control" placeholder="Sexo" required/>

                                <label>Data de Nascimento:</label>
                                <input type="date" name="data_nascimento" class="form-control" placeholder="Data de nascimento" required/>

                                <br/>    

                                <label>Cliente</label>
                                <select name="id_cliente" class="form-control">  
                                    <?php
                                    if ($consultacli == true) {
                                        for ($i = 0; $i < count($consultacli); $i++) {
                                            echo"<option value=" . $consultacli[$i]['id_cliente'] . ">" . $consultacli[$i]['nome'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <br/> <br/> 
                                <button type="submit" value="Cadastrar" method="post" class="btn btn-primary btn-success btn-block">Registrar</button>
                        </form>
                        </body>
                    </div>
                </div>       
            </div>
        </div>     
?>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "../../Administrador/jquery/dist/jquery.js" ></script>
<script src="../../Administrador/popper.js/dist/popper.js" ></script>
<script src= "../../Administrador/js/bootstrap.js" ></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</html>   
