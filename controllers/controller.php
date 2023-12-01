<?php

require_once("connection.php");
require_once("models/restaurants.php");
require_once("models/users.php");

class Controller{


    function index(){
        require("views/index.php");
    }

    function test(){
        require("views/test.php");
    }

    function restaurant(int $id){
        $rest_model = new Restaurant(connect());

        $menu_url = $rest_model -> get_restaurant($id)["file_url"];

        require($menu_url);

    }

    function login(){
        require("views/login.php");
        if (isset($_POST["submit"])){
            $user_model = new User(connect());
            $user_model -> get_user($_POST["username"], $_POST["password"]);
        }
    }

    function signup(){
        require("views/register.php");
        if (isset($_POST["submit"])){
            $user_model = new User(connect());
            $user_model -> create_user($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["username"], $_POST["password"]);
            if(!$user_model){
                echo "El usuario no pudo ser creado!";
            }
            header("Location: /ing-web/login");
            die(0);
        }
    }
}

?>