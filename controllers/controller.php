<?php
require_once("connection.php");
require_once("models/bookings.php");
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
        if (isset($_POST["login"])){
            $user_model = new User(connect());
            $user = $user_model -> get_user($_POST["username"], $_POST["password"]);
            if($user){
                $_SESSION["userid"] = $user["id"];
                $_SESSION["username"] = $user["user"];
                echo "<script>window.location.href=\"/ing-web/\";</script>";

            } else echo "Este usuario no existe!";
        }

    }

    function signup(){
        require("views/register.php");
        if (isset($_POST["signup"])){
            $user_model = new User(connect());
            $user_model -> create_user($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["username"], $_POST["password"]);
            if(!$user_model){
                echo "El usuario no pudo ser creado!";
            }
            echo "<script>window.location.href=\"/ing-web/login\";</script>";
        }
    }

    function filter(){
        require("views/filter.php");
    }

    function signout(){
        session_start();
        
        if(isset($_POST["signout"])){
            session_destroy();
        }
        echo "<script>window.location.href=\"/ing-web/\";</script>";
    }

    function book(){
        require("views/reserva.php");
        if(isset($_POST["book"])){
            $booking_model = new Booking(connect());
            $datetime = new DateTime($_POST["date"] ." ". $_POST["time"]);
            $now = new DateTime();
            if ($now < $datetime) {
                $booking_model -> create_booking($_SESSION["userid"], $_POST["restaurant"], $_POST["date"], $_POST["time"], $_POST["guests"], $_POST["comments"]);
                echo "<script>window.location.href=\"/ing-web/\";</script>";
            } else {
                throw new Error("No se puede realizar reservas en el pasado!");       
            }

        }
    }

    function not_found(){
        require("views/foundn't.php");
    }

}

?>