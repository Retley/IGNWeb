<?php

class Restaurant{

    private $conn;

    function __construct(mysqli $connection){
        $this -> conn = $connection;
    }

    function get_all_restaurants(){
        $st = $this -> conn -> prepare("SELECT * FROM RESTAURANTES"); //prepara el comando SQL a ser ejecutado
        $st->execute(); //ejecuta el comando
        $result = $st->get_result(); //retorna el resultado de la ejecución

        return $result->fetch_all(MYSQLI_ASSOC); //convierte el objeto resultado a un arreglo asociativo utilizable
    }

    function get_restaurant(int $id){
        $st = $this -> conn -> prepare("SELECT * FROM RESTAURANTES WHERE ID = ?"); //prepara el comando SQL a ser ejecutado
        $st ->bind_param("i", $id); // dice al comando qué parametro utilizar en el comando
        $st->execute(); //ejecuta el comando
        $result = $st->get_result(); //retorna el resultado de la ejecución

        return $result->fetch_assoc(); //convierte el objeto resultado a un arreglo asociativo utilizable
    }

    function filter_restaurants(string $type, string $price){
        
        $query = "SELECT * FROM RESTAURANTES";
        if($type && $price){
            $query .= " WHERE tipo = '$type' AND precio = $price";  
        } elseif($type){
            $query .= " WHERE tipo = '$type'";
        } elseif($price){
            $query .= " WHERE precio = $price";
        }
        $result = $this->conn->execute_query($query);

        $restaurants = [];
        while ($row = $result->fetch_assoc()) {
            $restaurants[] = $row;
        }
    
        return $restaurants;
    }


}

?>