<?php

function validar_envio_form() {

    return $_SERVER['REQUEST_METHOD'] == 'POST';

}

function dados_em_branco($dados) {

    foreach($dados as $valor) {
        if(empty($valor) && $valor !== "0"){
            return true;
        }
    }

    return false;
    
}













?>