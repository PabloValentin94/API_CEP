<?php

// php -S localhost:8080

use App\Controller\EnderecoController;

include "Config.php";

include "Autoload.php";

include "Rotas.php";

$cidades = ["Jaú", "Bariri", "Itapuí", "Dois Córregos"];

var_dump($cidades);

include "Controller/Controller.php";

\API_CEP\Controller\Controller::GetResponseAsJSON($cidades);

?>