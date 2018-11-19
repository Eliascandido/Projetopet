
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <link href="administrador/css/bootstrap.min.css" rel="stylesheet">
        <link href="administrador/css/bootstrap.cs" rel="stylesheet">
        <link rel="stylesheet" href="administraador/css/bootstrap.css" >
        <link rel="stylesheet" type="text/css" href="administrador/css/estiloregistro.css">
         <title>Reino animal</title>
         
         <link rel="shortcut icon" href="administrador/img/reino.png" type="image"/>
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
        <br/>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="administrador/img/reino.png" alt="" width="35px" class="d-inline-block align-top" alt="">Reino Animal</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>	
        </div>
    </nav>  
    <div class="container-fluid" id="container">		
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">     

                <form name="login_sys" class="login" action="Usuario/inserir_cliente/inserir_clientes_inicio.php" method="POST"> 
                    <h1>
                        Cadastro
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
                        <input type="number_format" class="form-control" name="cpf" placeholder="Cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##',this)" required>
                    </div>
                    <div>
                        <label> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div>
                        <label>Senha</label>
                        <input type="Password" name="senha"  class="form-control" maxlength="16" placeholder="Senha" required>
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
    <br/>
</body>           
<script src="administrador/jquery/dist/jquery.min.js"></script>
<script src="admiministrador/js/bootstrap.bundle.min.js"></script>
<script src="administrador/popper.js/dist/popper.js" ></script>
<script src= "administrador/js/bootstrap.js" ></script>

</html>