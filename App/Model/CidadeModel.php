<?php

namespace App\Model;

use App\DAO\EnderecoDAO;

class CidadeModel extends Model
{

    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function GetCidadesByUF($uf)
    {

        $dao = new EnderecoDAO();

        $this->rows = $dao->SelectCidadesByUF($uf);

    }

}

?>