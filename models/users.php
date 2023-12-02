<?php



class User{
    private $conn;

    function __construct(mysqli $connection){
        $this -> conn = $connection;
    }

    function create_user($full_name, $email, $phone, $user, $pass){
        $st = $this -> conn -> prepare ("SELECT * FROM USUARIOS WHERE USER = ? OR EMAIL = ?");
        $st ->bind_param("ss",  $user, $email);
        $st -> execute();
        $result = $st->get_result();
        if ($result -> num_rows > 0){
            echo "ese usuario ya existe!";
        }

        $cr = $this -> conn -> prepare ("INSERT INTO USUARIOS (fullname, email, phone, user, pass) VALUES (?, ?, ?, ?, ?);");
        $cr -> bind_param("sssss", $full_name, $email, $phone,  $user, $pass);
        $cr->execute();
        
        return($cr -> affected_rows > 0);
    }

    function get_user(string $user, string $pass){
        $st = $this -> conn -> prepare("SELECT * FROM USUARIOS WHERE USER = ? AND PASS = ?"); //prepara el comando SQL a ser ejecutado
        $st ->bind_param("ss", $user, $pass); // dice al comando qué parametro utilizar en el comando
        $st->execute(); //ejecuta el comando
        $result = $st->get_result(); //retorna el resultado de la ejecución

        return $result->fetch_assoc(); //convierte el objeto resultado a un arreglo asociativo utilizable
    }


}

?>