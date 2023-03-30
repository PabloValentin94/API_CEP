<?php

// php -S localhost:8080

include "Config.php";

include "Autoload.php";

include "Rotas.php";

/*

    Rotas de teste:

    https://cep.metoda.com.br/endereco/by-cep?cep=17210580
    https://cep.metoda.com.br/logradouro/by-bairro?id_cidade=4874&bairro=Centro
    https://cep.metoda.com.br/cep/by-logradouro?logradouro=Rua
    https://cep.metoda.com.br/cidade/by-uf?uf=SP
    https://cep.metoda.com.br/bairro/by-cidade?id_cidade=4874

    /endereco/by-cep?cep=17210580
    /logradouro/by-bairro?id_cidade=4874&bairro=Centro
    /cep/by-logradouro?logradouro=Rua
    /cidade/by-uf?uf=SP
    /bairro/by-cidade?id_cidade=4874

*/

?>