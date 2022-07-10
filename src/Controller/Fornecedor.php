<?php

namespace APP\Controller;

use APP\Model\Fornecedor;
use APP\Model\Validacao;
use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if (empty($_POST)) {
    Redirect::redirect(
        message: 'Requisição inválida!!!',
        type: 'error'
    );
}

$fornecedorName = $_POST["name"];
$fornecedorCode = (float) $_POST["code"];
$fornecedorService = (float) $_POST["service"];

$error = array();

if(!Validacao::validateNome($fornecedorName)){
    array_push($error, "O nome do fornecedor deve conter ao menos 3 caracteres!!!");
}

if(!Validacao::validateCode($fornecedorCode)){
    array_push($error, "O Código do fornecedor deve ser maior que zero!!!");
}

if(!Validacao::validateNome($fornecedorService)){
    array_push($error, "A descrição do serviço deve conter ao menos 15 caracteres");
}

if($error){ 
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $fornecedor = new Fornecedor(
        name: $fornecedorName,
        code: $fornecedorCode,
        service: $fornecedorService
    );

    Redirect::redirect(
        message: "Produto cadastrado com sucesso!!!"
    );
}