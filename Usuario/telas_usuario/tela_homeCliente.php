<?php
require("../../administrador/conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Reino animal</title>

        <!-- Bootstrap e CSS -->
        <link href="../../administrador/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../administrador/css/bootstrap.cs" rel="stylesheet">

        <link href="../../administrador/css/estilo_inicio.css" rel="stylesheet">
        <link rel="shortcut icon" href="../../administrador/img/reino.png" type="image"/>

    </head>

    <body>

        <!-- Navegação -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="tela_homeCliente.php"><img src="../../administrador/img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consulta<span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="Consulta_ficha_animal.php">Ver meus animais</a>
                                <a class="dropdown-item" href="Ver_consulta_animal.php">Ver consulta do animal</a>        
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tela_homeCliente.php#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tela_homeCliente.php#servico">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tela_homeCliente.php#contato">Contato</a>
                        </li>     
                    </ul>
                    <a class="navbar-brand" href="../../administrador/sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
                </div>
            </div>
        </nav>

        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('../../administrador/img/pet.jpg')">

                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('../../administrador/img/pet2.jpg')">

                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('../../administrador/img/pet3.jpg')">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
        <!-- fim carrousel-->
        <br/>
        <div class="container" id="sobre">

            <ol class="breadcrumb"></ol><!--Barra de divisao -->

            <br/><br/>
            <!--Inicio do Sobre -->
            <div class="row" >
                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4" src="../../administrador/img/loja.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>Reino Animal</h2>
                    <p>Bom dia!!!</p>
                    <p>Hoje, nós da Clínica Reino Animal, estamos lançando uma nova promoção que vai até o fim do mês (30/04), trazendo seu amiguinho para banho no nosso pet shop ele ganhará uma Hidratação de 90 segundos.</p>
                    <p></p>
                </div>
            </div>
            <!--Fim do Sobre-->

            <!-- inicio da secão serviço -->
            <div id="servico" class="container">
                <br/><br/>

                <ol class="breadcrumb">

                </ol>

                <br/><br/>


                <!-- Imagem da Header -->
                <img class="img-fluid rounded mb-4" src="../../administrador/img/clinica.jpg" alt="">

                <!--Inicio dos cards -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Vacinas</h4>
                            <div class="card-body">
                                <p class="card-text">Trabalhamos com vacinas importadas que confere maior segurança na imunização das principais doenças para nossos pacientes, sendo elas:
                                    Puppy, Vanguard Plus, Defensor, Bronchiguard, Felocell e Fel-O-Vax </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Ultrassonografia</h4>
                            <div class="card-body">
                                <p class="card-text">Proporcionamos aos nossos pacientes a realização do exame ultrassonográfico por meio de agendamento com profissional capacitado em parceria com nossa clínica. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Exames Laboratoriais</h4>
                            <div class="card-body">
                                <p class="card-text">Realizamos exames laboratoriais com equipamentos automatizados o que proporciona rapidez na liberação dos resultados e também no diagnóstico.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Raio X</h4>
                            <div class="card-body">
                                <p class="card-text">Exame radiográfico para detecção de fraturas e auxiliar no diagnósticos de outras doenças. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Tratamento dentário</h4>
                            <div class="card-body">
                                <p class="card-text">Realizamos tartarectomia, para melhorar a saúde bucal do seu animalzinho.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">Cirurgias</h4>
                            <div class="card-body">
                                <p class="card-text">Cirurgias realizadas por profissionais capacitados </p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Fim dos cards -->
                <br/><br/>

                <ol class="breadcrumb"  id="contato">

                </ol>

                <br/><br/>

                <!-- inicio da Section -->
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Contatos e Localização</h2>

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/clivetreinoanimal/?rc=p" class="link1"><img class="face" src="../../administrador/img/face.png"></a>
                            </li>
                            <li><a href="#" class="link1"><img class="face" src="../../administrador/img/tel.png">(35) 3641-2947</a> </li>

                            <!--<li><a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">08:00 às 18:00</a></li>-->
                            <li>
                                <b>Horário:</b>
                            </li>
                            <li>Segunda a Sexta das 08:00 às 18:00</li>
                            <li>sábado das 08:00 às 14:00</li>

                        </ul>

                    </div>
                    <div class="col-lg-5 mb-4">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.770728910599!2d-45.612523784894066!3d-22.475248428265214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb81f7893dc735%3A0xff0bbfcd5064dab0!2sR.+Eucl%C3%ADdes+Cintra%2C+48%2C+Bras%C3%B3polis+-+MG%2C+37530-000!5e0!3m2!1spt-BR!2sbr!4v1542061794264"
                                width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>
                        <p><strong>Rua Euclides Cintra, 48, Centro Brazópolis, Minas Gerais, Brazil</strong></p>
                    </div>

                </div>
                <!-- fim da section -->
                <br/><br/>



            </div>
            <!-- fim da container -->

            <!-- inicio do Footer -->
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">2018. All rights reserved | Design by Reino Animal</p>
                </div>

            </footer>

            <!-- fim do Footer -->

            <script>
                $(document).ready(function () {
                    $('[data-toggle="popover"]').popover();
                });
            </script>
            <!-- Jquery,Java Script -->
            <script src="../../administrador/jquery/dist/jquery.min.js"></script>
            <script src="../../administrador/js/bootstrap.bundle.min.js"></script>

    </body>

