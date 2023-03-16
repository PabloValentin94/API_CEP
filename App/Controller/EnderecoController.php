<?php

namespace App\Controller;

use App\Model\EnderecoModel;

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



    }

    public static function GetLogradouroByCEP() : void
    {

        

    }

    public static function GetBairrosByIDCidade() : void
    {



    }

    public static function GetCidadeByUF() : void
    {

        

    }

}

?>