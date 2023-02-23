<?php

use App\Controller\EnderecoController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        echo "Início";
    break;

    case "/endereco/by-cep":
        EnderecoController::GetLogradouroByCEP();
    break;

    case "/logradouro/by-bairro":
        EnderecoController::GetLogradouroByBairroAndCidade();
    break;

    case "/cep/by-logradouro":
        EnderecoController::GetCEPByLogradouro();
    break;

    case "/cidade/by-uf":
        EnderecoController::GetCidadeByUF();
    break;

    case "/bairro/by-cidade":
        EnderecoController::GetBairrosByIDCidade();
    break;

    default:
        http_response_code(403);
        //echo "Erro 404!";

}

?>