
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <link rel="stylesheet" href="../css/bootstrap.css" >
        <link rel="stylesheet" type="text/css" href="../css/estiloregistro.css">

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
                    <form name="login_sys" class="login" action="../Inserir/inserir_clientes.php" method="POST"> 
                        <h1>
                            Cadastro do Cliente
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
                            <input type="tel" class="form-control"  name="telefone" placeholder="Telefone" maxlength="13"placeholder="xx-xxxxx-xxxx" id="tel" OnKeyPress="formatar('##.#####-####', this)" required>
                        </div>
                        <div>
                            <label>Cpf</label>
                            <input type="number_format" class="form-control" name="cpf" placeholder="Cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
                        </div>
                        <div>
                            <label> Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div>
                            <label>Senha</label>
                            <input type="Password" name="senha" class="form-control" maxlength="16" placeholder="Senha" required>
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
    <script src = "../jquery/dist/jquery.js" ></script>
    <script src="../popper.js/dist/popper.js" ></script>
    <script src= "../js/bootstrap.js" ></script>

</html>


