<?php

require("controllers/controller.php");

$controller = new Controller();
$req = str_replace("/ing-web", "", $_SERVER["REQUEST_URI"]);


if($req == "/"){
    $controller -> index();
} elseif($req == "/test"){
    $controller -> test();
}elseif(preg_match('/\/restaurants\/(\d+)/',$req, $match)){
    $id = $match[1];
    $controller -> restaurant($id);
} elseif($req == "/login"){
    $controller -> login();
} elseif($req == "/signup"){
    $controller -> signup();
}


?>