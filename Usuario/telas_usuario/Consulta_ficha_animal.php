<?php
include '../../administrador/conexao/conexao.php';

session_start();
$id = $_SESSION['id'];
$sql = mysqli_query(connect(), "select animal.id_cliente,animal.nome as nomeAnimal, animal.raca , animal.especie, animal.sexo, animal.data_nascimento from cliente join animal on cliente.id_cliente = animal.id_cliente where animal.id_cliente='$id'");
?>
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="author" content="Alisson"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">	
            <link rel="stylesheet" href="../../administrador/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="../../administrador/css/Estilo_ficha_animal.css">

        </head>
        <body>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="tela_homeCliente.php"><img src="../../administrador/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">

                        </ul>
                        <a class="navbar-brand" href="../../administrador/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
                    </div>
                </div>
            </nav>
            <form>
                <?php
                if (mysqli_num_rows($sql) > 0) {

                    while (($consultaA = mysqli_fetch_assoc($sql))) {
                        ?>
                <br/>
                        <div class="requerimento">
                            <div class="container-fluid col-md-7 col-sm-9 col-xs-12">	
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h2><?php echo $consultaA['nomeAnimal']; ?></h2>
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type = "text" class = "form-control"  placeholder = "" value = "<?php echo $consultaA['nomeAnimal']; ?>"required disabled="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Especie</label>
                                            <input type = "text" class = "form-control"  placeholder = "" value = "<?php echo $consultaA['especie']; ?>"required disabled="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Raça</label>
                                            <input type = "text" class = "form-control"  placeholder = "" value = "<?php echo $consultaA['raca']; ?>"required disabled="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <input type = "text" class = "form-control"  placeholder = "" value = "<?php echo $consultaA['sexo']; ?>"required disabled="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Data de nascimento</label>
                                            <input type = "date" class = "form-control" placeholder = "Data" value = "<?php echo $consultaA['data_nascimento']; ?>"required disabled="true">
                                        </div>
                                        <br/>

                                    </div>
                                    <div class = "col-md-4 col-sm-4 col-xs-12"></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>h
                    <div class="requerimento">
                        <div class="container-fluid col-md-7 col-sm-9 col-xs-12">	
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                                <h2 style="color: red">Você não possui animais cadastrados</h2>
                                <div class = "col-md-4 col-sm-4 col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </form>
        </body>
        <!-- Bootstrap core JavaScript -->
        <script src="../../administrador/jquery/dist/jquery.min.js"></script>
        <script src="../../administrador/js/bootstrap.bundle.min.js"></script>


    </html>

