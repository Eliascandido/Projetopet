<?php
include("../funcao/Funcao_select.php");

$consulta = select("veterinario", "*", NULL, "ORDER BY nome ASC");
?>

<html>
    <head>
        <meta charset="UTF-8"/> 
        <meta name="author" content="Alisson"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/estilo_vet.css">
    </head>
    <script>
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i);

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }
        }

    </script>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../telas_administrador/HomeAdministrador.php"><img src="../img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar veterinário<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../cadastros/CadastroVet.php">Cadastrar</a>
                            <a class="dropdown-item" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>        
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
                    <form class="login" action="../Inserir/inserir_veterinario.php" method="POST">
                        <h1> Cadastro do Veterinário</h1>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" required/>
                        </div>

                        <div>
                            <label>CRMV:</label>
                            <input type="text" name="crmv" class="form-control" placeholder="CRMV" required />
                        </div>

                        <div>
                            <label>Bairro:</label>
                            <input type="text" name="bairro" class="form-control" placeholder="Bairro" required/>
                        </div>

                        <div>
                            <label>Rua:</label>
                            <input type="text" name="rua" class="form-control" placeholder="Rua" required/>
                        </div>

                        <div>
                            <label>Número da casa:</label>
                            <input type="text" name="num_casa" class="form-control" placeholder="NºCasa" required/>
                        </div>

                        <div>
                            <label> Telefone</label>
                            <input type="tel" class="form-control"  name="telefone" placeholder="Telefone" maxlength="13"placeholder="xx-xxxxx-xxxx" id="tel" OnKeyPress="formatar('##.#####-####', this)" required>
                        </div>

                        <div>
                            <label>Especialização:</label>
                            <input type="text" name="especializacao" class="form-control" placeholder="Especializacao" required/>
                        </div>

                        <div>
                            <label>E-mail:</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" required/>
                        </div>

                        <div>
                            <label>Senha:</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required/>
                        </div>
                        <br/>
                        <div>
                            <button type="submit" value="Cadastrar" method="post" class="btn btn-primary btn-success btn-block">Cadastrar</button>
                            <input type="hidden" name="acao" method="post" value="inserir">
                        </div> 

                    </form> 
                </div>
            </div>
        </div>     

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
