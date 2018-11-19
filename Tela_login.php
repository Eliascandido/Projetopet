<?php
include("administrador/conexao/conexao.php");
?>
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
            <link href="administrador/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="administrador/css/estilologin.css">
        </head>
        <body>
            <!-- Navigation -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="administrador/img/reino.png" alt="" width="35px" class="d-inline-block align-top" alt="">Reino Animal</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <section class="login-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 login-sec">
                            <h2 class="text-center">Login</h2>
                            <form class="login-form" action="administrador/Login/login.php" method="post">
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
                                        <img class="d-block img-fluid" src="administrador/img/gatinho.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Reino animal</h2>
                                                <p>Seu gatinho está entediado, preguiçoso e sem atividade para fazer durante o dia!!!
                                                    Aqui na Clínica Reino Animal temos uma grande variedade de arranhadores e brinquedos que vai mandar esse tédio embora.</p>
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="administrador/img/cachorro2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Banho e Tosa</h2>
                                                <p>Tratamos seu amiguinho com maior carinho, para que ele tenha uma ótima experiência no momento relaxante do banho, 
                                                    utilizando os produtos da Pet Society para um tratamento adequado da pele e do pelo.</p>
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="administrador/img/banho.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>Produtos Veterinário</h2>
                                                <p>Temos em nossa loja os melhores produtos do mercado, para banho, nutrição, conforto e tratamento dos nossos clientes, venham conferir.
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
        <!-- Bootstrap core JavaScript -->
        <script src="administrador/jquery/dist/jquery.min.js"></script>
        <script src="administrador/js/bootstrap.bundle.min.js"></script>

    </html>                   

