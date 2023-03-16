<?php

namespace App\Model;

use App\DAO\EnderecoDAO;

use Exception;

class EnderecoModel extends Model
{

    public $id_lograduro, $tipo, $descricao, $id_cidade, $uf, $complemento;

    public $descricao_sem_numero, $descricao_cidade, $codigo_cidade_ibge, $descricao_bairro;

    public $lista_cidades;

    public function GetLogradouroByBairroAndCidade(string $bairro, int $id_cidade)
    {

        try
        {

            $dao = new EnderecoDAO();

            $this->rows = $dao->SelectLogradouroByBairroAndCidade($bairro, $id_cidade);

        }

        catch(Exception $ex)
        {

            throw $ex;

        }

    }

    public function GetLogradouroByCEP(int $cep)
    {

        try
        {

            $dao = new EnderecoDAO();

            return $dao->selectByCep($cep);

        }

        catch(Exception $ex)
        {

            throw $ex;

        }

    }

    public function GetCEPByLogradouro(int $logradouro)
    {

        try
        {

            $dao = new EnderecoDAO();

            $this->rows = $dao->SelectCEPByLogradouro($logradouro);

        }

        catch (Exception $ex)
        {

            echo $ex->getMessage();

        }

    }

    public function GetBairrosByIDCidade(int $id_cidade)
    {

        try
        {

            $dao = new EnderecoDAO();

            $this->rows = $dao->SelectBairrosByIDCidade($id_cidade);

        }

        catch (Exception $ex)
        {

            echo $ex->getMessage();

        }

    }

}

?>