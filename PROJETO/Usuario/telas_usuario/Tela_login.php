<?php
include("../../adm/conexao/conexao.php");
@$info = $_REQUEST['info'];
?>
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../../adm/css/estilologin.css">
        </head>
        <body> 
            <section class="login-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 login-sec">
                            <h2 class="text-center">Login</h2>
                            <form class="login-form" action="../../Adm/telas_administrador/login.php" method="post">
                                <div class="form-group">
                                    <label class="text-uppercase">Email</label>
                                    <input id="email"value="" type="text" class="form-control" placeholder="" name="email" required>

                                </div>
                                <div class="form-group">
                                    <label  class="text-uppercase">Senha</label>
                                    <input id="senha"type="password" class="form-control" placeholder=""name="senha" required="">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        <small>Lembre-me</small>
                                    </label>
                                    <input type="submit" value="Entrar" method="post" name="Entrar" class="btn btn-login float-right"></button>
                                </div>

                            </form>

                        </div>
                        <div class="col-md-8 banner-sec">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="../../Adm/img/gatinho.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Reino animal</h2>
                                                <p>Seu gatinho está entediado, preguiçoso e sem atividade para fazer durante o dia!!!
                                                    Aqui na Clínica Reino Animal temos uma grande variedades de arranhadores e brinquedos que vai mandar esse tédio embora.</p>
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="../../Adm/img/cachorro2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Banho e Tosa</h2>
                                                <p>Tratamos seu amiguinho com maior carinho, para que ele tenha uma ótima experiência no momento relaxante do banho, 
                                                    utilizando os produtos da Pet Society para um tratamento adequado da pele e pelo.</p>
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="../../Adm/img/banho.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Produtos Veterinário</h2>
                                                <p>Temos em nossa loja os melhores produtos do mercado, para banho, nutrição, conforto e tratamento dos nossos cliente, venham conferir.
                                                    Shampoo, condicionador, rações, petiscos e medicações.</p>
                                            </div>	
                                        </div>
                                    </div>
                                </div>	   

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>   


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </html>                   

