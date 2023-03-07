<?php

namespace App\DAO;

class EnderecoDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function SelectCidadesByUF(string $uf)
    {

        $sql = "SELECT * FROM Logradouro WHERE uf = ? ORDER BY descricao ASC";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $uf);

        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS);

    }

    public function SelectByCEP(int $cep)
    {

        $sql = "SELECT * FROM Logradouro WHERE cep = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $cep);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\EnderecoModel");

        $endereco_obj->lista_cidades = $this->SelectCidadesByUF($endereco_obj->UF);

        return $endereco_obj;

    }

    public function SelectLogradouroByBairroAndCidade(string $bairro, int $id_cidade)
    {

        $sql = "SELECT * FROM Logradouro WHERE descricao_bairro = ? AND id_cidade = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $bairro);

        $stmt->bindValue(1, $id_cidade);

        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS);

    }

}

?>