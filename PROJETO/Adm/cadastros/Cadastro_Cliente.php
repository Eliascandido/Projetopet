
<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/> 
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../css/estiloregistro.css">
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
            <div class="container-fluid">		
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">     

                        <form name="login_sys" class="login" action="../../Adm/Inserir/inserir_clientes.php" method="POST"> 
                            <h1>
                                Cadastro Cliente
                            </h1>
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="text" name="nome"class="form-control" placeholder="Nome" required>
                            </div>
                            <div>                                                        
                                <label>Bairro</label>
                                <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
                            </div>
                            <div>
                                <label>NºCasa </label>
                                <input type="number_format" name="numero"  class="form-control" placeholder="NºCasa" required>
                            </div>
                            <div>
                                <label> Rua</label>
                                <input type="text" class="form-control"  name="rua" placeholder="Rua" required>
                            </div>

                            <div>
                                <label> Telefone</label>
                                <input type="tel" class="form-control"  name="telefone" placeholder="Telefone" required>
                            </div>
                            <div>
                                <label>Cpf</label>
                                <input type="number_format" class="form-control" name="cpf" placeholder="Cpf" required>
                            </div>
                            <div>
                                <label> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div>
                                <label>Senha</label>
                                <input type="Password" name="senha"  class="form-control" maxlength="8" placeholder="Senha" required>
                            </div>                

                            <br/>

                            <div>
                                <button type="submit" value="Registrar" method="post" class="btn btn-primary btn-success btn-block">Cadastrar</button>
                                <input type="hidden" name="acao" method="post" value="inserir">
                            </div> 
                        </form>	
                    </div>
                </div>
            </div>         
        </body>           
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>


