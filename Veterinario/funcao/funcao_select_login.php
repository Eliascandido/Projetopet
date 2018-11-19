<?php
include("../../administrador/conexao/conexao.php");
include("../../administrador/conexao/fecha_conexao.php");

function selectlogin($tabela, $coluna = "*", $where = NULL, $ordem = NULL, $limite = NULL) {

    //sql da consulta
    $sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

    // conectou?

    if ($conexao = connect()) {

        //consegui consultar?
        if ($query = mysqli_query($conexao, $sql)) {

            //Encontrou alguma coisa?
            if (mysqli_num_rows($query) > 0) {

                $resultados_totais = array();

                while ($resultado = mysqli_fetch_assoc($query)) {

                    $resultados_totais[] = $resultado;
                }

                //fecha conexao
                fechaConexao($conexao);

                return $resultados_totais;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}


