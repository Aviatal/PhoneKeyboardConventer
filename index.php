<?php
declare(strict_types=1);


require_once("src/Controller/ConvertController.php");
require_once("src/Request.php");

use App\Controller\ConvertController;
use App\Request;



$request = new Request($_GET, $_POST);

$controller = new ConvertController($request);
$controller->run();