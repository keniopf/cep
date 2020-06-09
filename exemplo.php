<?php
require_once "vendor/autoload.php";

use ti\laravel\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode("73050164");

print_r($resultado);