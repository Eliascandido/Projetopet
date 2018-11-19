<?php
include("../funcao/funcao_select.php");
$consultaAni = select("animal", "*", NULL, "ORDER BY nome ASC");
$consulta = select("cliente", "*", NULL, "ORDER BY nome ASC");
?>
<head>
    <meta charset="UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_telaAdministrador.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../telas_administrador/HomeAdministrador.php"><img src="../img/reino.png" alt="" width="30px" class="d-inline-block align-top" alt="">Reino animal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="../sessao/Logout.php"><img alt="" width="30px" class="d-inline-block align-top" alt="">Sair</a>
            </ul>	
        </div>
    </nav> <br/><br/><br/>
    <div class="container">
        <h4>Gerenciar cliente</h4>

        <a type="button" class="btn btn-dark" style="width: 100%;" href="../Cadastros/Cadastro_Cliente.php">Cadastrar</a><br/>
        <br/><a type="button" class="btn btn-dark" style="width: 100%;" href="../alterar_excluir/alterar_excluir.php">alterar/excluir</a>
    </div><br/><br/><br/><br/>

    <div class="container"> 
        <h4>Gerenciar veterinário</h4>
        <a type="button" class="btn btn-dark" style="width: 100%;" href="../cadastros/CadastroVet.php">Cadastrar</a><br/>
        <br/><a type="button" class="btn btn-dark" style="width: 100%;" href="../alterar_excluir/alterar_excluir_veterinario.php">alterar/excluir</a>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src = "../jquery/dist/jquery.js" ></script>
    <script src="../popper.js/dist/popper.js" ></script>
    <script src= "../js/bootstrap.js" ></script>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</html> 