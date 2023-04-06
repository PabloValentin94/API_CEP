<?php

namespace App\Controller;

use App\Model\EnderecoModel;
use App\Model\CidadeModel;
use Exception;

class EnderecoController extends Controller
{

    public static function GetCEPByLogradouro() : void
    {

        try
        {

            $logradouro = $_GET["logradouro"];

            $model = new EnderecoModel();

            $model->GetCEPByLogradouro($logradouro);

            parent::GetResponseAsJSON($model->rows);

        }

        catch(Exception $ex)
        {

            parent::getExceptionAsJSON($ex);

        }

    }

    public static function GetLogradouroByBairroAndCidade() : void
    {

        try
        {

            $bairro = parent::GetStringFromURL(isset($_GET["bairro"]) ? $_GET["bairro"] : null, "bairro");

            $id_cidade = parent::GetIntFromURL(isset($_GET["id_cidade"]) ? $_GET["id_cidade"] : null, "id_cidade");

            $model = new EnderecoModel();

            $model->GetLogradouroByBairroAndCidade($bairro, $id_cidade);

            parent::GetResponseAsJSON($model->rows);

        }

        catch(Exception $ex)
        {

            parent::GetExceptionAsJSON($ex);

        }

    }

    public static function GetLogradouroByCEP() : void
    {

        try
        {

            $cep = parent::GetIntFromURL(isset($_GET["cep"]) ? $_GET["cep"] : null);

            $model = new EnderecoModel();

            parent::GetResponseAsJSON($model->GetLogradouroByCEP($cep));

        }

        catch(Exception $ex)
        {

            parent::GetExceptionAsJSON($ex);

        }

    }

    public static function GetBairrosByIDCidade() : void
    {

        try
        {

            $id_cidade = parent::GetIntFromURL(isset($_GET["id_cidade"]) ? $_GET["id_cidade"] : null);

            $model = new EnderecoModel();

            $model->GetBairrosByIDCidade($id_cidade);

            parent::GetResponseAsJSON($model->rows);

        }

        catch(Exception $ex)
        {

            parent::GetExceptionAsJSON($ex);

        }

    }

    public static function GetCidadeByUF() : void
    {

        try
        {

            $uf = $_GET["uf"];

            $model = new CidadeModel();

            $model->GetCidadesByUF($uf);

            parent::GetResponseAsJSON($model->rows);

        }

        catch(Exception $ex)
        {

            parent::GetExceptionAsJSON($ex);

        }

    }

}

?>