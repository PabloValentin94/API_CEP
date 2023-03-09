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

}

?>